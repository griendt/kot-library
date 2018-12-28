@extends('layouts.card')
@section('card-header')
    Castle Upgrades
@overwrite
@section('card-detail')
    Above the player's dungeon, one can find the <mark>Castle Upgrades</mark>. Initially, some upgrades are locked. In order to unlock them, the upgrade below it needs to reach level <b>4</b> first.<br>
    Note that these costs are the base costs without any <mark>Merchant</mark> bonus (except for <mark>Merchant</mark> costs itself, considering it affects its own costs as well). The net costs of any player to max his <mark>Castle</mark> should be considerably less than the sum of these totals, if they fully upgrade their <mark>Merchant</mark> skill early on.
    <table class="table-wrapper">
        <tr><td>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Merchant</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>250000</td><td>250000</td></tr>
                        <tr><td>3</td><td>237000</td><td>487000</td></tr>
                        <tr><td>4</td><td>225000</td><td>712000</td></tr>
                        <tr><td>5</td><td>255000</td><td>967000</td></tr>
                        <tr><td>6</td><td>240000</td><td>1207000</td></tr>
                        <tr><td>7</td><td>225000</td><td>1432000</td></tr>
                        <tr><td>8</td><td>245000</td><td>1677000</td></tr>
                        <tr><td>9</td><td>227501</td><td>1904501</td></tr>
                        <tr><td>10</td><td>240000</td><td>2144501</td></tr>
                        <tr><td>11</td><td>220001</td><td>2364502</td></tr>
                    </table>
                </div>
            </td></tr>
    </table>
    <table class="table-wrapper">
        <tr><td>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Gem Defense</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>50000</td><td>50000</td></tr>
                        <tr><td>3</td><td>60000</td><td>110000</td></tr>
                        <tr><td>4</td><td>70000</td><td>180000</td></tr>
                        <tr><td>5</td><td>80000</td><td>260000</td></tr>
                        <tr><td>6</td><td>100000</td><td>360000</td></tr>
                        <tr><td>7</td><td>120000</td><td>480000</td></tr>
                        <tr><td>8</td><td>140000</td><td>620000</td></tr>
                        <tr><td>9</td><td>160000</td><td>780000</td></tr>
                        <tr><td>10</td><td>180000</td><td>960000</td></tr>
                        <tr><td>11</td><td>190000</td><td>1150000</td></tr>
                        <tr><td>12</td><td>200000</td><td>1350000</td></tr>
                        <tr><td>13</td><td>210000</td><td>1560000</td></tr>
                        <tr><td>14</td><td>220000</td><td>1780000</td></tr>
                        <tr><td>15</td><td>230000</td><td>2010000</td></tr>
                        <tr><td>16</td><td>240000</td><td>2250000</td></tr>
                        <tr><td>17</td><td>260000</td><td>2510000</td></tr>
                        <tr><td>18</td><td>280000</td><td>2790000</td></tr>
                        <tr><td>19</td><td>300000</td><td>3090000</td></tr>
                        <tr><td>20</td><td>320000</td><td>3410000</td></tr>
                        <tr><td>21</td><td>340000</td><td>3750000</td></tr>
                        <tr><td>22</td><td>360000</td><td>4110000</td></tr>
                        <tr><td>23</td><td>380000</td><td>4490000</td></tr>
                        <tr><td>24</td><td>400000</td><td>4890000</td></tr>
                        <tr><td>25</td><td>420000</td><td>5310000</td></tr>
                        <tr><td>26</td><td>440000</td><td>5750000</td></tr>
                    </table>
                </div>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Skull Gold Bonus</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>25000</td><td>25000</td></tr>
                        <tr><td>3</td><td>30000</td><td>55000</td></tr>
                        <tr><td>4</td><td>40000</td><td>95000</td></tr>
                        <tr><td>5</td><td>50000</td><td>145000</td></tr>
                        <tr><td>6</td><td>60000</td><td>205000</td></tr>
                        <tr><td>7</td><td>70000</td><td>275000</td></tr>
                        <tr><td>8</td><td>80000</td><td>355000</td></tr>
                        <tr><td>9</td><td>90000</td><td>445000</td></tr>
                        <tr><td>10</td><td>100000</td><td>545000</td></tr>
                        <tr><td>11</td><td>120000</td><td>665000</td></tr>
                        <tr><td>12</td><td>140000</td><td>805000</td></tr>
                        <tr><td>13</td><td>160000</td><td>965000</td></tr>
                        <tr><td>14</td><td>180000</td><td>1145000</td></tr>
                        <tr><td>15</td><td>200000</td><td>1365000</td></tr>
                        <tr><td>16</td><td>220000</td><td>1605000</td></tr>
                        <tr><td>17</td><td>240000</td><td>1865000</td></tr>
                        <tr><td>18</td><td>260000</td><td>2145000</td></tr>
                        <tr><td>19</td><td>280000</td><td>2445000</td></tr>
                        <tr><td>20</td><td>300000</td><td>2765000</td></tr>
                        <tr><td>21</td><td>320000</td><td>3105000</td></tr>
                        <tr><td>22</td><td>340000</td><td>3465000</td></tr>
                        <tr><td>23</td><td>360000</td><td>3845000</td></tr>
                        <tr><td>24</td><td>480000</td><td>4245000</td></tr>
                        <tr><td>25</td><td>400000</td><td>4665000</td></tr>
                        <tr><td>26</td><td>420000</td><td>5085000</td></tr>
                    </table>
                </div>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Gold Mine Speed</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>5000</td><td>5000</td></tr>
                        <tr><td>3</td><td>10000</td><td>15000</td></tr>
                        <tr><td>4</td><td>20000</td><td>35000</td></tr>
                        <tr><td>5</td><td>30000</td><td>65000</td></tr>
                        <tr><td>6</td><td>35000</td><td>100000</td></tr>
                        <tr><td>7</td><td>40000</td><td>140000</td></tr>
                        <tr><td>8</td><td>45000</td><td>185000</td></tr>
                        <tr><td>9</td><td>50000</td><td>235000</td></tr>
                        <tr><td>10</td><td>60000</td><td>295000</td></tr>
                        <tr><td>11</td><td>70000</td><td>365000</td></tr>
                        <tr><td>12</td><td>80000</td><td>445000</td></tr>
                        <tr><td>13</td><td>90000</td><td>535000</td></tr>
                        <tr><td>14</td><td>100000</td><td>635000</td></tr>
                        <tr><td>15</td><td>110000</td><td>755000</td></tr>
                        <tr><td>16</td><td>120000</td><td>885000</td></tr>
                        <tr><td>17</td><td>130000</td><td>1035000</td></tr>
                        <tr><td>18</td><td>150000</td><td>1205000</td></tr>
                        <tr><td>19</td><td>170000</td><td>1395000</td></tr>
                        <tr><td>20</td><td>190000</td><td>1605000</td></tr>
                        <tr><td>21</td><td>210000</td><td>1835000</td></tr>
                        <tr><td>22</td><td>230000</td><td>2085000</td></tr>
                        <tr><td>23</td><td>250000</td><td>2355000</td></tr>
                        <tr><td>24</td><td>270000</td><td>2645000</td></tr>
                        <tr><td>25</td><td>290000</td><td>2955000</td></tr>
                        <tr><td>26</td><td>310000</td><td>3265000</td></tr>
                    </table>
                </div>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Gold Mine Capacity</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>15000</td><td>15000</td></tr>
                        <tr><td>3</td><td>20000</td><td>35000</td></tr>
                        <tr><td>4</td><td>25000</td><td>60000</td></tr>
                        <tr><td>5</td><td>30000</td><td>90000</td></tr>
                        <tr><td>6</td><td>35000</td><td>125000</td></tr>
                        <tr><td>7</td><td>40000</td><td>165000</td></tr>
                        <tr><td>8</td><td>45000</td><td>210000</td></tr>
                        <tr><td>9</td><td>50000</td><td>260000</td></tr>
                        <tr><td>10</td><td>60000</td><td>320000</td></tr>
                        <tr><td>11</td><td>70000</td><td>390000</td></tr>
                        <tr><td>12</td><td>80000</td><td>470000</td></tr>
                        <tr><td>13</td><td>90000</td><td>560000</td></tr>
                        <tr><td>14</td><td>100000</td><td>660000</td></tr>
                        <tr><td>15</td><td>110000</td><td>780000</td></tr>
                        <tr><td>16</td><td>120000</td><td>910000</td></tr>
                        <tr><td>17</td><td>130000</td><td>1060000</td></tr>
                        <tr><td>18</td><td>150000</td><td>1230000</td></tr>
                        <tr><td>19</td><td>170000</td><td>1420000</td></tr>
                        <tr><td>20</td><td>190000</td><td>1630000</td></tr>
                        <tr><td>21</td><td>210000</td><td>1860000</td></tr>
                        <tr><td>22</td><td>230000</td><td>2110000</td></tr>
                        <tr><td>23</td><td>250000</td><td>2380000</td></tr>
                        <tr><td>24</td><td>270000</td><td>2670000</td></tr>
                        <tr><td>25</td><td>290000</td><td>2980000</td></tr>
                        <tr><td>26</td><td>310000</td><td>3290000</td></tr>
                    </table>
                </div>
            </td></tr>
    </table>
    <table class="table-wrapper">
        <tr><td>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Key Capacity</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>3000</td><td>3000</td></tr>
                        <tr><td>3</td><td>7000</td><td>10000</td></tr>
                        <tr><td>4</td><td>14000</td><td>24000</td></tr>
                        <tr><td>5</td><td>22000</td><td>46000</td></tr>
                        <tr><td>6</td><td>32000</td><td>78000</td></tr>
                        <tr><td>7</td><td>45000</td><td>123000</td></tr>
                        <tr><td>8</td><td>55000</td><td>178000</td></tr>
                        <tr><td>9</td><td>60000</td><td>238000</td></tr>
                        <tr><td>10</td><td>70000</td><td>308000</td></tr>
                        <tr><td>11</td><td>80000</td><td>388000</td></tr>
                        <tr><td>12</td><td>90000</td><td>478000</td></tr>
                        <tr><td>13</td><td>100000</td><td>578000</td></tr>
                        <tr><td>14</td><td>110000</td><td>688000</td></tr>
                        <tr><td>15</td><td>120000</td><td>808000</td></tr>
                        <tr><td>16</td><td>140000</td><td>948000</td></tr>
                        <tr><td>17</td><td>160000</td><td>1108000</td></tr>
                        <tr><td>18</td><td>180000</td><td>1288000</td></tr>
                        <tr><td>19</td><td>200000</td><td>1488000</td></tr>
                        <tr><td>20</td><td>220000</td><td>1708000</td></tr>
                        <tr><td>21</td><td>240000</td><td>1948000</td></tr>
                        <tr><td>22</td><td>260000</td><td>2208000</td></tr>
                        <tr><td>23</td><td>280000</td><td>2488000</td></tr>
                        <tr><td>24</td><td>300000</td><td>2788000</td></tr>
                        <tr><td>25</td><td>320000</td><td>3108000</td></tr>
                        <tr><td>26</td><td>340000</td><td>3328000</td></tr>
                        <tr><td>27</td><td>360000</td><td>3688000</td></tr>
                        <tr><td>28</td><td>380000</td><td>4068000</td></tr>
                        <tr><td>29</td><td>400000</td><td>4468000</td></tr>
                        <tr><td>30</td><td>420000</td><td>4888000</td></tr>
                        <tr><td>31</td><td>440000</td><td>5328000</td></tr>
                        <tr><td>32</td><td>460000</td><td>5788000</td></tr>
                    </table>
                </div>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Key Regeneration</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>15000</td><td>15000</td></tr>
                        <tr><td>3</td><td>30000</td><td>45000</td></tr>
                        <tr><td>4</td><td>40000</td><td>85000</td></tr>
                        <tr><td>5</td><td>45000</td><td>130000</td></tr>
                        <tr><td>6</td><td>50000</td><td>180000</td></tr>
                        <tr><td>7</td><td>55000</td><td>235000</td></tr>
                        <tr><td>8</td><td>60000</td><td>295000</td></tr>
                        <tr><td>9</td><td>65000</td><td>360000</td></tr>
                        <tr><td>10</td><td>70000</td><td>430000</td></tr>
                        <tr><td>11</td><td>80000</td><td>510000</td></tr>
                        <tr><td>12</td><td>90000</td><td>600000</td></tr>
                        <tr><td>13</td><td>100000</td><td>700000</td></tr>
                        <tr><td>14</td><td>110000</td><td>810000</td></tr>
                        <tr><td>15</td><td>120000</td><td>930000</td></tr>
                        <tr><td>16</td><td>140000</td><td>1070000</td></tr>
                        <tr><td>17</td><td>160000</td><td>1230000</td></tr>
                        <tr><td>18</td><td>180000</td><td>1410000</td></tr>
                        <tr><td>19</td><td>200000</td><td>1610000</td></tr>
                        <tr><td>20</td><td>220000</td><td>1830000</td></tr>
                        <tr><td>21</td><td>240000</td><td>2070000</td></tr>
                        <tr><td>22</td><td>260000</td><td>2330000</td></tr>
                        <tr><td>23</td><td>280000</td><td>2510000</td></tr>
                        <tr><td>24</td><td>300000</td><td>2810000</td></tr>
                        <tr><td>25</td><td>320000</td><td>3130000</td></tr>
                        <tr><td>26</td><td>340000</td><td>3470000</td></tr>
                        <tr><td>27</td><td>360000</td><td>3830000</td></tr>
                        <tr><td>28</td><td>380000</td><td>4210000</td></tr>
                        <tr><td>29</td><td>400000</td><td>4610000</td></tr>
                        <tr><td>30</td><td>400000</td><td>5010000</td></tr>
                        <tr><td>31</td><td>400000</td><td>5410000</td></tr>
                        <tr><td>32</td><td>400000</td><td>5810000</td></tr>
                    </table>
                </div>
                <div class="table-container">
                    <table class="table table-sm table-striped" style="float: left">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="3" style="text-align: center">Fake Keyhole</th>
                        </tr>
                        <tr>
                            <th>\(n\)</th>
                            <th>{!! res('gold') !!}</th>
                            <th>\(\sum\){!! res('gold') !!}</th>
                        </tr>
                        </thead>
                        <tr><td>1</td><td>0</td><td>0</td></tr>
                        <tr><td>2</td><td>5000</td><td>5000</td></tr>
                        <tr><td>3</td><td>10000</td><td>15000</td></tr>
                        <tr><td>4</td><td>15000</td><td>30000</td></tr>
                        <tr><td>5</td><td>40000</td><td>70000</td></tr>
                        <tr><td>6</td><td>55000</td><td>125000</td></tr>
                        <tr><td>7</td><td>65000</td><td>190000</td></tr>
                        <tr><td>8</td><td>80000</td><td>270000</td></tr>
                        <tr><td>9</td><td>90000</td><td>360000</td></tr>
                        <tr><td>10</td><td>100000</td><td>460000</td></tr>
                        <tr><td>11</td><td>110000</td><td>570000</td></tr>
                        <tr><td>12</td><td>120000</td><td>690000</td></tr>
                        <tr><td>13</td><td>130000</td><td>820000</td></tr>
                        <tr><td>14</td><td>140000</td><td>960000</td></tr>
                        <tr><td>15</td><td>150000</td><td>1110000</td></tr>
                        <tr><td>16</td><td>170000</td><td>1280000</td></tr>
                        <tr><td>17</td><td>190000</td><td>1470000</td></tr>
                        <tr><td>18</td><td>210000</td><td>1680000</td></tr>
                        <tr><td>19</td><td>230000</td><td>1910000</td></tr>
                        <tr><td>20</td><td>250000</td><td>2060000</td></tr>
                        <tr><td>21</td><td>270000</td><td>2330000</td></tr>
                        <tr><td>22</td><td>290000</td><td>2620000</td></tr>
                        <tr><td>23</td><td>310000</td><td>2930000</td></tr>
                        <tr><td>24</td><td>330000</td><td>3360000</td></tr>
                        <tr><td>25</td><td>350000</td><td>3710000</td></tr>
                        <tr><td>26</td><td>370000</td><td>4080000</td></tr>
                        <tr><td>27</td><td>390000</td><td>4470000</td></tr>
                        <tr><td>28</td><td>410000</td><td>4880000</td></tr>
                    </table>
                </div>
            </td></tr>
    </table>
@overwrite
