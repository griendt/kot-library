var vueBase = Vue.component('vueBase', {
    data: function () {
        return {
            visible_maps: new Array(this.maps.length+1).join('1').split('')
        };
    },
    props: ['maps'],
    methods: {
        detail: function(mapIndex) {
            window.location.href = '/content/base?b=' + this.maps[mapIndex].identifier;
        },
        set_visible: function(mapIndex) {
            this.visible_maps[mapIndex] = true;
            // this.maps[mapIndex].isVisible = true;
        },
        set_invisible: function(mapIndex) {
            this.visible_maps[mapIndex] = false;
            // this.maps[mapIndex].isVisible = false;
        },
        logstuff: function(text) {
            console.log(text);
        }
        // isVisible: function(mapIndex) {
        //     return this.maps[mapIndex].isVisible;
        // }
    },
    computed: {
        visible_maps: function () {
            var result = [];
            for (var b = 0; b < this.maps.length; b++) {
                result.push(this.maps[b].isVisible);
            }
            return result;
        }
    },
    mounted: function() {
        this.$nextTick(function () {
        this.$parent.$on('filterSelection', (on, blockIndex, blocks, grav, plat, dplat, tramp) => {
            for (var b = 0; b < this.maps.length; b++) {
                // If the map is already invisible and on (=subselection), do nothing.
                if (on && this.maps[b].isVisible === false) {
                    continue;
                }

                // blockIndex -1 implies that not a block was toggled but a special property.
                // If the map doesn't have a selected special property, deselect.
                if (
                    (!this.maps[b].hasGravity && grav) ||
                    (!this.maps[b].hasPlatform && plat) ||
                    (!this.maps[b].hasDoublePlatform && dplat) ||
                    (!this.maps[b].hasTrampoline && tramp)) {
                    // Vue.set(this.maps, b, this.maps_invisible[b]);
                    this.set_invisible(b);
                }

                if (blockIndex === -1 && on) {
                    continue;
                }

                // Below, deselection/selection can only happen if the block in question is empty!
                if (blockIndex !== -1 && this.maps[b].blocks[blockIndex] === "1") {
                    continue;
                }

                if (on) {
                    this.set_invisible(b);
                }
                else {
                    var shouldEnable = true;
                    for (var j = 0; j < this.maps[b].blocks.length; j++) {
                        if (blocks[j] === 1 && this.maps[b].blocks[j] === '0') {
                            shouldEnable = false;
                            break;
                        }
                    }
                    if (shouldEnable) {
                        if (!(
                                (!this.maps[b].hasGravity && grav) ||
                                (!this.maps[b].hasPlatform && plat) ||
                                (!this.maps[b].hasDoublePlatform && dplat) ||
                                (!this.maps[b].hasTrampoline && tramp))) {
                            this.set_visible(b);
                        }
                    }
                }
            }

            // It is faster to modify this.maps as non-reactive element and then force an update, than to make it reactive!
            this.$forceUpdate();
            });
        });
            this.$parent.$on('clearSelection', () => {
            for (var l = 0; l < this.maps.length; l++) {
                this.set_visible(l);
            }

            this.$forceUpdate();
        });
    },
    template: "<div>" +
    "<transition-group class='list-container' tag='p' name='list-complete'>" +
    "<div @click='detail(mapIndex)' class='list-complete-item' v-bind:key='map.identifier' v-if='visible_maps[mapIndex]' v-for='(map, mapIndex) in maps'>" +
    "<div class='map-wrapper'>" +
    "<div class='map-modifier map-modifier-gravity'><span>{{ map.hasGravity ? 'G' : ' ' }}</span></div>" +
    "<div class='map-modifier map-modifier-trampoline'><span> {{ map.hasTrampoline ? 'T' : ' ' }}</span></div>" +
    "<div class='map-modifier map-modifier-platform'><span>{{ map.hasPlatform ? 'P' : ' ' }}</span></div>" +
    "<div class='map-modifier map-modifier-doubleplatform'><span> {{ map.hasDoublePlatform ? '2P' : '  ' }}</span></div>" +
    "<div class='map-header'><strong>{{ (Array(4).join('0') + map.identifier).slice(-3) }}</strong></div>" +
    "<div class='map-container'>" +
    "<div v-for='block in map.blocks' v-bind:class=\"{ 'block block-1': parseInt(block), 'block block-0': !parseInt(block) }\">" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div></transition-group></div>"
});

////////////////////////////////////////////////

var vueBigBase = Vue.component('vueBigBase', {
    components: {
        VueBigBaseChildBase: vueBase
    },
    data: function () {
        return {
            blocks: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            gravity_on: false,
            platform_on: false,
            double_platform_on: false,
            trampoline_on: false
        }
    },
    props: {
        // blocks: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    },
    computed: {
        current_blocks: function() {
            return this.blocks;
        }
    },
    methods: {
        press: function (id) {
            this.$set(this.blocks, id, 1 - this.blocks[id]);
            this.apply(this.blocks[id], id);
        },
        clear: function () {
            for (var i = 0; i < this.blocks.length; i++) {
                Vue.set(this.blocks, i, 0);
            }
            this.gravity_on = false;
            this.platform_on = false;
            this.double_platform_on = false;
            this.trampoline_on = false;
            this.$parent.$emit('clearSelection');
        },
        apply: function (on, blockIndex) {
            this.$parent.$emit('filterSelection', on, blockIndex, this.blocks, this.gravity_on, this.platform_on, this.double_platform_on, this.trampoline_on);
        }
        ,
        apply_gravity: function (on) {
            this.gravity_on = on;
            this.apply(on, -1);
        },
        apply_platform: function (on) {
            this.platform_on = on;
            this.apply(on, -1);
        },
        apply_double_platform: function (on) {
            this.double_platform_on = on;
            this.apply(on, -1);
        },
        apply_trampoline: function (on) {
            this.trampoline_on = on;
            this.apply(on, -1);
        }
    },

    template: "<div class='map-big-wrapper'><div>" +
    "<input @click='clear' type='button' class='btn btn-outline-primary' value='Clear selection' />" +
    "<div class='map-big-wrapper'><div class='map-big-container'>" +
    "<div @mousedown='press(blockIndex)' class='big-block big-block-0' v-for='(block, blockIndex) in current_blocks' :class=\"{ 'big-block-1': block }\">" +
    "</div></div></div></div>" +
    "<div class='map-big-checkboxes'>" +
    "<input @click='apply_gravity(gravity_on)' type='checkbox' v-model='gravity_on'> Gravity<br></input>" +
    "<input @click='apply_platform(platform_on)' type='checkbox' v-model='platform_on'> Platform<br></input>" +
    "<input @click='apply_double_platform(double_platform_on)' type='checkbox' v-model='double_platform_on'> Double Platform<br></input>" +
    "<input @click='apply_trampoline(trampoline_on)' type='checkbox' v-model='trampoline_on'> Trampoline<br></input>" +
    "</div>" +
    "</div>"
});

var vueTrapIcon = Vue.component('vueTrapIcon', {
    data: function() {
       return {
           traps: [],
           // selected_trap: 'saw'
           selected_trap: 'https://kotlib.net/storage/traps/saw.png'
       };
    },
    template: "<div class='trap-small-container'>" +
    "<div class='trap-small'>" +
    // "<strong> {{ selected_trap }}</strong>" +
    "<img :src='selected_trap' />" +
    "</div></div>"
});

var vueLayout = Vue.component('vueLayout', {
    data: function () {
        return {
            route_deletion: '/api/layouts/delete',
        }
    },
    props:['base_identifier', 'layouts', 'csrf_token', 'user_can_delete_layout'],
    template:
    "<div><div v-for='layout in layouts' class='row justify-content-start float-none'>" +
    "<div class='col-md-8'>" +
    "<div class='card'>" +
    "<div class='card-header'><small>Base {{ base_identifier }}</small> | Layout #{{ layout.id }} | Uploaded by: {{ layout.uploader_user_name }}</div>" +
    "<div class='card-body'>" +
    "<div class='layout-wrapper'><img style='width: 100%; max-width: 600px; max-height: 400px' :src='layout.design_picture' />" +
    "<hr> {{ layout.design_comment }}" +
    "</div>" +
    "<a style='float: left' class='btn btn-primary' target='_blank' :href='layout.design_solution'>Video Solution</a>" +
    "<form v-if='user_can_delete_layout' method='POST' :action='route_deletion'>" +
    "<input type='hidden' name='_token' :value='csrf_token'>" +
    "<input type='hidden' name='base_identifier' :value='base_identifier'>" +
    "<input type='hidden' name='layout_id' :value='layout.id'>" +
    "<button style='float:left' type='submit' class='btn btn-danger' >Delete Layout</button></form>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>"
});

var vueExploit = Vue.component('vueExploit', {
    data: function () { return {
        route_deletion: '/api/exploit/delete',
        }
    },
    props: ['base_identifier', 'exploits', 'csrf_token', 'user_can_delete_exploit'],
    template:
    "<div><div v-for='exploit in exploits' class='row justify-content-start float-none'>" +
    "<div class='col-md-8'>" +
    "<div class='card'>" +
    "<div class='card-header'><small>Base {{ base_identifier }}</small> Exploit #{{ exploit.id }} | Uploaded by: {{ exploit.uploader_user_name }}</div>" +
    "<div class='card-body'>" +
    "<div class='exploit-wrapper'><img style='width: 100%; max-width: 600px; max-height: 400px' :src='exploit.layout_screenshot' />" +
    "<hr> {{ exploit.exploit_comment }}" +
    "</div>" +
    "<a style='float: left' class='btn btn-primary' target='_blank' :href='exploit.exploit_video'>Video Solution</a>" +
    "<form v-if='user_can_delete_exploit' method='POST' :action='route_deletion'>" +
    "<input type='hidden' name='_token' :value='csrf_token'>" +
    "<input type='hidden' name='base_identifier' :value='base_identifier'>" +
    "<input type='hidden' name='layout_exploit_id' :value='exploit.id'>" +
    "<button style='float:left' type='submit' class='btn btn-danger' >Delete Exploit</button></form>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>"
});

////////////////////////////////////////

var vueTabs = Vue.component('tabs', {
    template: "<div>" +
    "<ul class='nav nav-tabs'>" +
    "<li v-for=\"(tab, index) in tabs\" class='nav-item'><a href='#' class='nav-link' :class=\"{ active: (activeTab === tab || (activeTab === '' && index === 0)) }\" @click=\"activate(tab)\">{{ tab }}</a></li>" +
    "</ul><slot></slot>" +
    "</div>",
    data: function() {
        return {
            activeTab: '',
            tabs: []
        }
    },
    methods: {
        activate: function(tab) {
            this.activeTab = tab;
            this.$emit('activateTab', tab);
        }
    },
    created: function() {
        this.$emit('activateTab', this.tabs[0]);
    }
});

var vueTab = Vue.component('tab', {
    props: ['label', 'selected'],
    template: "<div v-show='visible'><slot></slot></div>",

    created: function() {
        var self = this;
        if ((typeof this.selected !== 'undefined' && this.selected === '') || (this.$parent.$data.tabs.length === 0)) {
            this.$parent.$data.activeTab = this.label;
            this.visible = true;
        }
        this.$parent.$data.tabs.push(this.label);
        this.$parent.$on('activateTab', function(tab) {
            if (self.label === tab) {
                self.visible = true;
            } else {
                self.visible = false;
            }
        })
    },
    data: function() {
        return {
            visible: false
        }
    },
});

var vueOrb = Vue.component('orb', {
    template: "<div><img :src='url'/><slot></slot></div>",
    created: function() {
        this.url = 'traps/red_guard.png'
    },
    data: function() {
        return {
            url: false
        }
    }
});
//////////////////////////////////////////////////

var vm = new Vue({
    el: '#app',
    data: {},
    methods: {},
    computed: {},
    components: {
        // VueBase: vueBase,
        VueBigBase: vueBigBase,
        VueTrapIcon: vueTrapIcon,
        VueLayout: vueLayout,
        VueTab: vueTab,
        VueTabs: vueTabs,
        VueExploit: vueExploit,
        VueOrb: vueOrb,
    },
    ready: function () {
    }
});

// }
