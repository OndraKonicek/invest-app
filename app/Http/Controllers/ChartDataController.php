<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Deposit;
use App\Models\Withdrawal;

class ChartDataController extends Controller
{
    public function accountData(){
        $date = Carbon::parse('2020-01-01');

        $bitcoin = collect([
            [
                "time" => 1577899578000,
                "value_change" => 997.39,
            ],
            [
                "time" => 1577985978000,
                "value_change" => 1019.2,
            ],
            [
                "time" => 1578072378000,
                "value_change" => 1037.5,
            ],
            [
                "time" => 1578158778000,
                "value_change" => 1138,
            ],
            [
                "time" => 1578245178000,
                "value_change" => 1003.2,
            ],
            [
                "time" => 1578331578000,
                "value_change" => 898,
            ],
            [
                "time" => 1578417978000,
                "value_change" => 908,
            ],
            [
                "time" => 1578504378000,
                "value_change" => 915.9,
            ],
            [
                "time" => 1578590778000,
                "value_change" => 903,
            ],
            [
                "time" => 1578677178000,
                "value_change" => 905.51,
            ],
            [
                "time" => 1578763578000,
                "value_change" => 778.58,
            ],
            [
                "time" => 1578849978000,
                "value_change" => 803.62,
            ],
            [
                "time" => 1578936378000,
                "value_change" => 828.12,
            ],
            [
                "time" => 1579022778000,
                "value_change" => 815.3,
            ],
            [
                "time" => 1579109178000,
                "value_change" => 820.74,
            ],
            [
                "time" => 1579195578000,
                "value_change" => 830.06,
            ],
            [
                "time" => 1579281978000,
                "value_change" => 903.98,
            ],
            [
                "time" => 1579368378000,
                "value_change" => 887.46,
            ],
            [
                "time" => 1579454778000,
                "value_change" => 900.29,
            ],
            [
                "time" => 1579541178000,
                "value_change" => 895.74,
            ],
            [
                "time" => 1579627578000,
                "value_change" => 924.02,
            ],
            [
                "time" => 1579713978000,
                "value_change" => 923.72,
            ],
            [
                "time" => 1579800378000,
                "value_change" => 905.99,
            ],
            [
                "time" => 1579886778000,
                "value_change" => 885.66,
            ],
            [
                "time" => 1579973178000,
                "value_change" => 893.35,
            ],
            [
                "time" => 1580059578000,
                "value_change" => 915.12,
            ],
            [
                "time" => 1580145978000,
                "value_change" => 916.7,
            ],
            [
                "time" => 1580232378000,
                "value_change" => 919.43,
            ],
            [
                "time" => 1580318778000,
                "value_change" => 912.55,
            ],
            [
                "time" => 1580405178000,
                "value_change" => 917.35,
            ],
            [
                "time" => 1580491578000,
                "value_change" => 966.19,
            ],
            [
                "time" => 1580577978000,
                "value_change" => 983.73,
            ],
            [
                "time" => 1580664378000,
                "value_change" => 1005.7,
            ],
            [
                "time" => 1580750778000,
                "value_change" => 1015,
            ],
            [
                "time" => 1580837178000,
                "value_change" => 1031.1,
            ],
            [
                "time" => 1580923578000,
                "value_change" => 1006.6,
            ],
            [
                "time" => 1581009978000,
                "value_change" => 1022.5,
            ],
            [
                "time" => 1581096378000,
                "value_change" => 1052.1,
            ],
            [
                "time" => 1581182778000,
                "value_change" => 1048.8,
            ],
            [
                "time" => 1581269178000,
                "value_change" => 984.96,
            ],
            [
                "time" => 1581355578000,
                "value_change" => 992,
            ],
            [
                "time" => 1581441978000,
                "value_change" => 1000.1,
            ],
            [
                "time" => 1581528378000,
                "value_change" => 996.01,
            ],
            [
                "time" => 1581614778000,
                "value_change" => 996.5,
            ],
            [
                "time" => 1581701178000,
                "value_change" => 1013.2,
            ],
            [
                "time" => 1581787578000,
                "value_change" => 1013.9,
            ],
            [
                "time" => 1581873978000,
                "value_change" => 1038.2,
            ],
            [
                "time" => 1581960378000,
                "value_change" => 1055,
            ],
            [
                "time" => 1582046778000,
                "value_change" => 1059.7,
            ],
            [
                "time" => 1582133178000,
                "value_change" => 1056.2,
            ],
            [
                "time" => 1582219578000,
                "value_change" => 1090.7,
            ],
            [
                "time" => 1582305978000,
                "value_change" => 1129.6,
            ],
            [
                "time" => 1582392378000,
                "value_change" => 1125.5,
            ],
            [
                "time" => 1582478778000,
                "value_change" => 1184.7,
            ],
            [
                "time" => 1582565178000,
                "value_change" => 1185.1,
            ],
            [
                "time" => 1582651578000,
                "value_change" => 1153,
            ],
            [
                "time" => 1582737978000,
                "value_change" => 1178.3,
            ],
            [
                "time" => 1582824378000,
                "value_change" => 1194.9,
            ],
            [
                "time" => 1582910778000,
                "value_change" => 1189.1,
            ],
            [
                "time" => 1582997178000,
                "value_change" => 1231.6,
            ],
            [
                "time" => 1583083578000,
                "value_change" => 1257,
            ],
            [
                "time" => 1583169978000,
                "value_change" => 1288.1,
            ],
            [
                "time" => 1583256378000,
                "value_change" => 1267.1,
            ],
            [
                "time" => 1583342778000,
                "value_change" => 1278.4,
            ],
            [
                "time" => 1583429178000,
                "value_change" => 1279.2,
            ],
            [
                "time" => 1583515578000,
                "value_change" => 1232.2,
            ],
            [
                "time" => 1583601978000,
                "value_change" => 1148.5,
            ],
            [
                "time" => 1583688378000,
                "value_change" => 1190.4,
            ],
            [
                "time" => 1583774778000,
                "value_change" => 1111.6,
            ],
            [
                "time" => 1583861178000,
                "value_change" => 1172.4,
            ],
            [
                "time" => 1583947578000,
                "value_change" => 1224.4,
            ],
            [
                "time" => 1584033978000,
                "value_change" => 1238.2,
            ],
            [
                "time" => 1584120378000,
                "value_change" => 1244.3,
            ],
            [
                "time" => 1584206778000,
                "value_change" => 1256.1,
            ],
            [
                "time" => 1584293178000,
                "value_change" => 1168.6,
            ],
            [
                "time" => 1584379578000,
                "value_change" => 1067.8,
            ],
            [
                "time" => 1584465978000,
                "value_change" => 966.8,
            ],
            [
                "time" => 1584552378000,
                "value_change" => 1016.1,
            ],
            [
                "time" => 1584638778000,
                "value_change" => 1038.3,
            ],
            [
                "time" => 1584725178000,
                "value_change" => 1115,
            ],
            [
                "time" => 1584811578000,
                "value_change" => 1038.7,
            ],
            [
                "time" => 1584897978000,
                "value_change" => 1032.7,
            ],
            [
                "time" => 1584984378000,
                "value_change" => 942.13,
            ],
            [
                "time" => 1585070778000,
                "value_change" => 972,
            ],
            [
                "time" => 1585157178000,
                "value_change" => 968.53,
            ],
            [
                "time" => 1585243578000,
                "value_change" => 1042.7,
            ],
            [
                "time" => 1585329978000,
                "value_change" => 1044.1,
            ],
            [
                "time" => 1585416378000,
                "value_change" => 1041.3,
            ],
            [
                "time" => 1585502778000,
                "value_change" => 1041,
            ],
            [
                "time" => 1585589178000,
                "value_change" => 1081.3,
            ],
            [
                "time" => 1585675578000,
                "value_change" => 1093.1,
            ],
            [
                "time" => 1585761978000,
                "value_change" => 1106.6,
            ],
            [
                "time" => 1585848378000,
                "value_change" => 1150.1,
            ],
            [
                "time" => 1585934778000,
                "value_change" => 1145,
            ],
            [
                "time" => 1586021178000,
                "value_change" => 1140.3,
            ],
            [
                "time" => 1586107578000,
                "value_change" => 1191.5,
            ],
            [
                "time" => 1586193978000,
                "value_change" => 1196.6,
            ],
            [
                "time" => 1586280378000,
                "value_change" => 1188.1,
            ],
            [
                "time" => 1586366778000,
                "value_change" => 1215.9,
            ],
            [
                "time" => 1586453178000,
                "value_change" => 1219.6,
            ],
            [
                "time" => 1586539578000,
                "value_change" => 1233.4,
            ],
            [
                "time" => 1586625978000,
                "value_change" => 1227.4,
            ],
            [
                "time" => 1586712378000,
                "value_change" => 1186.9,
            ],
            [
                "time" => 1586798778000,
                "value_change" => 1206.7,
            ],
            [
                "time" => 1586885178000,
                "value_change" => 1193.3,
            ],
            [
                "time" => 1586971578000,
                "value_change" => 1212,
            ],
            [
                "time" => 1587057978000,
                "value_change" => 1239.1,
            ],
            [
                "time" => 1587144378000,
                "value_change" => 1265,
            ],
            [
                "time" => 1587230778000,
                "value_change" => 1260.5,
            ],
            [
                "time" => 1587317178000,
                "value_change" => 1305.6,
            ],
            [
                "time" => 1587403578000,
                "value_change" => 1325.6,
            ],
            [
                "time" => 1587489978000,
                "value_change" => 1345.3,
            ],
            [
                "time" => 1587576378000,
                "value_change" => 1354.6,
            ],
            [
                "time" => 1587662778000,
                "value_change" => 1344.8,
            ],
            [
                "time" => 1587749178000,
                "value_change" => 1370.3,
            ],
            [
                "time" => 1587835578000,
                "value_change" => 1399.3,
            ],
            [
                "time" => 1587921978000,
                "value_change" => 1440.2,
            ],
            [
                "time" => 1588008378000,
                "value_change" => 1415.6,
            ],
            [
                "time" => 1588094778000,
                "value_change" => 1423.5,
            ],
            [
                "time" => 1588181178000,
                "value_change" => 1435,
            ],
            [
                "time" => 1588267578000,
                "value_change" => 1533,
            ],
            [
                "time" => 1588353978000,
                "value_change" => 1558.5,
            ],
            [
                "time" => 1588440378000,
                "value_change" => 1617.8,
            ],
            [
                "time" => 1588526778000,
                "value_change" => 1606,
            ],
            [
                "time" => 1588613178000,
                "value_change" => 1545.1,
            ],
            [
                "time" => 1588699578000,
                "value_change" => 1596.7,
            ],
            [
                "time" => 1588785978000,
                "value_change" => 1618.6,
            ],
            [
                "time" => 1588872378000,
                "value_change" => 1702.7,
            ],
            [
                "time" => 1588958778000,
                "value_change" => 1758.1,
            ],
            [
                "time" => 1589045178000,
                "value_change" => 1796.8,
            ],
            [
                "time" => 1589131578000,
                "value_change" => 1853.9,
            ],
            [
                "time" => 1589217978000,
                "value_change" => 1735,
            ],
            [
                "time" => 1589304378000,
                "value_change" => 1819.4,
            ],
            [
                "time" => 1589390778000,
                "value_change" => 1825.4,
            ],
            [
                "time" => 1589477178000,
                "value_change" => 1772,
            ],
            [
                "time" => 1589563578000,
                "value_change" => 1785.6,
            ],
            [
                "time" => 1589649978000,
                "value_change" => 1870,
            ],
            [
                "time" => 1589736378000,
                "value_change" => 1941.5,
            ],
            [
                "time" => 1589822778000,
                "value_change" => 1965.6,
            ],
            [
                "time" => 1589909178000,
                "value_change" => 2059.3,
            ],
            [
                "time" => 1589995578000,
                "value_change" => 2026.5,
            ],
            [
                "time" => 1590081978000,
                "value_change" => 2085.1,
            ],
            [
                "time" => 1590168378000,
                "value_change" => 2245.1,
            ],
            [
                "time" => 1590254778000,
                "value_change" => 2393.7,
            ],
            [
                "time" => 1590341178000,
                "value_change" => 2238.8,
            ],
            [
                "time" => 1590427578000,
                "value_change" => 2123.7,
            ],
            [
                "time" => 1590513978000,
                "value_change" => 1967.1,
            ],
            [
                "time" => 1590600378000,
                "value_change" => 2056.6,
            ],
            [
                "time" => 1590686778000,
                "value_change" => 2206.6,
            ],
            [
                "time" => 1590773178000,
                "value_change" => 2139,
            ],
            [
                "time" => 1590859578000,
                "value_change" => 2190.81430883,
            ],
            [
                "time" => 1590945978000,
                "value_change" => 2311,
            ],
            [
                "time" => 1591032378000,
                "value_change" => 2403.3,
            ],
            [
                "time" => 1591118778000,
                "value_change" => 2460.3,
            ],
            [
                "time" => 1591205178000,
                "value_change" => 2485,
            ],
            [
                "time" => 1591291578000,
                "value_change" => 2635,
            ],
            [
                "time" => 1591377978000,
                "value_change" => 2840,
            ],
            [
                "time" => 1591464378000,
                "value_change" => 2642.06391499,
            ],
            [
                "time" => 1591550778000,
                "value_change" => 2780,
            ],
            [
                "time" => 1591637178000,
                "value_change" => 2808.9,
            ],
            [
                "time" => 1591723578000,
                "value_change" => 2806,
            ],
            [
                "time" => 1591809978000,
                "value_change" => 2936.3,
            ],
            [
                "time" => 1591896378000,
                "value_change" => 2569.6,
            ],
            [
                "time" => 1591982778000,
                "value_change" => 2675.5,
            ],
            [
                "time" => 1592069178000,
                "value_change" => 2392.5740205,
            ],
            [
                "time" => 1592155578000,
                "value_change" => 2370.1,
            ],
            [
                "time" => 1592241978000,
                "value_change" => 2434.1,
            ],
            [
                "time" => 1592328378000,
                "value_change" => 2610,
            ],
            [
                "time" => 1592414778000,
                "value_change" => 2491.4,
            ],
            [
                "time" => 1592501178000,
                "value_change" => 2580.1,
            ],
            [
                "time" => 1592587578000,
                "value_change" => 2712.2,
            ],
            [
                "time" => 1592673978000,
                "value_change" => 2621.2,
            ],
            [
                "time" => 1592760378000,
                "value_change" => 2672.7,
            ],
            [
                "time" => 1592846778000,
                "value_change" => 2673,
            ],
            [
                "time" => 1592933178000,
                "value_change" => 2501,
            ],
            [
                "time" => 1593019578000,
                "value_change" => 2477.7,
            ],
            [
                "time" => 1593105978000,
                "value_change" => 2390.3,
            ],
            [
                "time" => 1593192378000,
                "value_change" => 2520.4,
            ],
            [
                "time" => 1593278778000,
                "value_change" => 2518.2,
            ],
            [
                "time" => 1593365178000,
                "value_change" => 2470.09520927,
            ],
            [
                "time" => 1593451578000,
                "value_change" => 2420.6,
            ],
            [
                "time" => 1593537978000,
                "value_change" => 2346.2,
            ],
            [
                "time" => 1593624378000,
                "value_change" => 2443.3,
            ],
            [
                "time" => 1593710778000,
                "value_change" => 2524,
            ],
            [
                "time" => 1593797178000,
                "value_change" => 2579.9,
            ],
            [
                "time" => 1593883578000,
                "value_change" => 2598.5,
            ],
            [
                "time" => 1593969978000,
                "value_change" => 2593,
            ],
            [
                "time" => 1594056378000,
                "value_change" => 2477.2,
            ],
            [
                "time" => 1594142778000,
                "value_change" => 2541.5,
            ],
            [
                "time" => 1594229178000,
                "value_change" => 2475,
            ],
            [
                "time" => 1594315578000,
                "value_change" => 2317.5,
            ],
            [
                "time" => 1594401978000,
                "value_change" => 2282.1,
            ],
            [
                "time" => 1594488378000,
                "value_change" => 2374.4,
            ],
            [
                "time" => 1594574778000,
                "value_change" => 2327.4,
            ],
            [
                "time" => 1594661178000,
                "value_change" => 2205.1,
            ],
            [
                "time" => 1594747578000,
                "value_change" => 1976.4,
            ],
            [
                "time" => 1594833978000,
                "value_change" => 1924.9,
            ],
            [
                "time" => 1594920378000,
                "value_change" => 2218.8,
            ],
            [
                "time" => 1595006778000,
                "value_change" => 2300,
            ],
            [
                "time" => 1595093178000,
                "value_change" => 2248.2,
            ],
            [
                "time" => 1595179578000,
                "value_change" => 2849.9,
            ],
            [
                "time" => 1595265978000,
                "value_change" => 2659,
            ],
            [
                "time" => 1595352378000,
                "value_change" => 2842,
            ],
            [
                "time" => 1595438778000,
                "value_change" => 2746.9,
            ],
            [
                "time" => 1595525178000,
                "value_change" => 2769.7,
            ],
            [
                "time" => 1595611578000,
                "value_change" => 2560.9,
            ],
            [
                "time" => 1595697978000,
                "value_change" => 2525,
            ],
            [
                "time" => 1595784378000,
                "value_change" => 2663.1,
            ],
            [
                "time" => 1595870778000,
                "value_change" => 2784.8,
            ],
            [
                "time" => 1595957178000,
                "value_change" => 2713.1,
            ],
            [
                "time" => 1596043578000,
                "value_change" => 2747.4,
            ],
            [
                "time" => 1596129978000,
                "value_change" => 2854.1,
            ],
            [
                "time" => 1596216378000,
                "value_change" => 2730.1,
            ],
            [
                "time" => 1596302778000,
                "value_change" => 2702,
            ],
            [
                "time" => 1596389178000,
                "value_change" => 2790.3,
            ],
            [
                "time" => 1596475578000,
                "value_change" => 2859.9,
            ],
            [
                "time" => 1596561978000,
                "value_change" => 3252.3,
            ],
            [
                "time" => 1596648378000,
                "value_change" => 3225,
            ],
            [
                "time" => 1596734778000,
                "value_change" => 3395.8,
            ],
            [
                "time" => 1596821178000,
                "value_change" => 3413.9,
            ],
            [
                "time" => 1596907578000,
                "value_change" => 3338.9,
            ],
            [
                "time" => 1596993978000,
                "value_change" => 3403.7,
            ],
            [
                "time" => 1597080378000,
                "value_change" => 3642.1,
            ],
            [
                "time" => 1597166778000,
                "value_change" => 3865.2,
            ],
            [
                "time" => 1597253178000,
                "value_change" => 4051.6,
            ],
            [
                "time" => 1597339578000,
                "value_change" => 4319.2,
            ],
            [
                "time" => 1597425978000,
                "value_change" => 4151.8,
            ],
            [
                "time" => 1597512378000,
                "value_change" => 4386.3,
            ],
            [
                "time" => 1597598778000,
                "value_change" => 4258.5,
            ],
            [
                "time" => 1597685178000,
                "value_change" => 4090.1,
            ],
            [
                "time" => 1597771578000,
                "value_change" => 4140.1,
            ],
            [
                "time" => 1597857978000,
                "value_change" => 4060,
            ],
            [
                "time" => 1597944378000,
                "value_change" => 3993,
            ],
            [
                "time" => 1598030778000,
                "value_change" => 4073.5,
            ],
            [
                "time" => 1598117178000,
                "value_change" => 4126,
            ],
            [
                "time" => 1598203578000,
                "value_change" => 4322.1,
            ],
            [
                "time" => 1598289978000,
                "value_change" => 4349.3,
            ],
            [
                "time" => 1598376378000,
                "value_change" => 4340.3,
            ],
            [
                "time" => 1598462778000,
                "value_change" => 4330.2,
            ],
            [
                "time" => 1598549178000,
                "value_change" => 4383,
            ],
            [
                "time" => 1598635578000,
                "value_change" => 4585.7,
            ],
            [
                "time" => 1598721978000,
                "value_change" => 4568,
            ],
            [
                "time" => 1598808378000,
                "value_change" => 4718.2,
            ],
            [
                "time" => 1598894778000,
                "value_change" => 4903,
            ],
            [
                "time" => 1598981178000,
                "value_change" => 4532.1,
            ],
            [
                "time" => 1599067578000,
                "value_change" => 4594.9,
            ],
            [
                "time" => 1599153978000,
                "value_change" => 4195.5,
            ],
            [
                "time" => 1599240378000,
                "value_change" => 4374.8,
            ],
            [
                "time" => 1599326778000,
                "value_change" => 4589.1,
            ],
            [
                "time" => 1599413178000,
                "value_change" => 4612.2,
            ],
            [
                "time" => 1599499578000,
                "value_change" => 4304,
            ],
            [
                "time" => 1599585978000,
                "value_change" => 4315.4,
            ],
            [
                "time" => 1599672378000,
                "value_change" => 4230,
            ],
            [
                "time" => 1599758778000,
                "value_change" => 4198.7,
            ],
            [
                "time" => 1599845178000,
                "value_change" => 4144.7,
            ],
            [
                "time" => 1599931578000,
                "value_change" => 3849.6,
            ],
            [
                "time" => 1600017978000,
                "value_change" => 3235.3,
            ],
            [
                "time" => 1600104378000,
                "value_change" => 3696.2,
            ],
            [
                "time" => 1600190778000,
                "value_change" => 3675.2,
            ],
            [
                "time" => 1600277178000,
                "value_change" => 3664.3,
            ],
            [
                "time" => 1600363578000,
                "value_change" => 4083.9,
            ],
            [
                "time" => 1600449978000,
                "value_change" => 3892.2,
            ],
            [
                "time" => 1600536378000,
                "value_change" => 3872,
            ],
            [
                "time" => 1600622778000,
                "value_change" => 3596.7,
            ],
            [
                "time" => 1600709178000,
                "value_change" => 3592.9,
            ],
            [
                "time" => 1600795578000,
                "value_change" => 3770.8,
            ],
            [
                "time" => 1600881978000,
                "value_change" => 3652.7,
            ],
            [
                "time" => 1600968378000,
                "value_change" => 3930,
            ],
            [
                "time" => 1601054778000,
                "value_change" => 3881.3,
            ],
            [
                "time" => 1601141178000,
                "value_change" => 4205.1,
            ],
            [
                "time" => 1601227578000,
                "value_change" => 4190,
            ],
            [
                "time" => 1601313978000,
                "value_change" => 4168,
            ],
            [
                "time" => 1601400378000,
                "value_change" => 4367,
            ],
            [
                "time" => 1601486778000,
                "value_change" => 4403.7,
            ],
            [
                "time" => 1601573178000,
                "value_change" => 4400.1,
            ],
            [
                "time" => 1601659578000,
                "value_change" => 4309.1,
            ],
            [
                "time" => 1601745978000,
                "value_change" => 4215.1,
            ],
            [
                "time" => 1601832378000,
                "value_change" => 4311.3,
            ],
            [
                "time" => 1601918778000,
                "value_change" => 4370,
            ],
            [
                "time" => 1602005178000,
                "value_change" => 4435.6,
            ],
            [
                "time" => 1602091578000,
                "value_change" => 4611.8,
            ],
            [
                "time" => 1602177978000,
                "value_change" => 4782.2,
            ],
            [
                "time" => 1602264378000,
                "value_change" => 4770,
            ],
            [
                "time" => 1602350778000,
                "value_change" => 4824.8,
            ],
            [
                "time" => 1602437178000,
                "value_change" => 5438.7,
            ],
            [
                "time" => 1602523578000,
                "value_change" => 5636.7,
            ],
            [
                "time" => 1602609978000,
                "value_change" => 5833,
            ],
            [
                "time" => 1602696378000,
                "value_change" => 5708,
            ],
            [
                "time" => 1602782778000,
                "value_change" => 5764.3,
            ],
            [
                "time" => 1602869178000,
                "value_change" => 5595,
            ],
            [
                "time" => 1602955578000,
                "value_change" => 5564.9,
            ],
            [
                "time" => 1603041978000,
                "value_change" => 5693.9,
            ],
            [
                "time" => 1603128378000,
                "value_change" => 5981.1,
            ],
            [
                "time" => 1603214778000,
                "value_change" => 6005.1,
            ],
            [
                "time" => 1603301178000,
                "value_change" => 5980.5,
            ],
            [
                "time" => 1603387578000,
                "value_change" => 5905.3,
            ],
            [
                "time" => 1603473978000,
                "value_change" => 5509.5,
            ],
            [
                "time" => 1603560378000,
                "value_change" => 5722,
            ],
            [
                "time" => 1603646778000,
                "value_change" => 5884.9,
            ],
            [
                "time" => 1603733178000,
                "value_change" => 5757.8,
            ],
            [
                "time" => 1603819578000,
                "value_change" => 5714,
            ],
            [
                "time" => 1603905978000,
                "value_change" => 6150,
            ],
            [
                "time" => 1603992378000,
                "value_change" => 6124,
            ],
            [
                "time" => 1604078778000,
                "value_change" => 6451,
            ],
            [
                "time" => 1604165178000,
                "value_change" => 6726.3,
            ],
            [
                "time" => 1604251578000,
                "value_change" => 7015.1,
            ],
            [
                "time" => 1604337978000,
                "value_change" => 7123,
            ],
            [
                "time" => 1604424378000,
                "value_change" => 7367.3,
            ],
            [
                "time" => 1604510778000,
                "value_change" => 7365,
            ],
            [
                "time" => 1604597178000,
                "value_change" => 6945.8,
            ],
            [
                "time" => 1604683578000,
                "value_change" => 7098,
            ],
            [
                "time" => 1604769978000,
                "value_change" => 7442.7,
            ],
            [
                "time" => 1604856378000,
                "value_change" => 7120,
            ],
            [
                "time" => 1604942778000,
                "value_change" => 6541.2,
            ],
            [
                "time" => 1605029178000,
                "value_change" => 6299.1,
            ],
            [
                "time" => 1605115578000,
                "value_change" => 5810.7,
            ],
            [
                "time" => 1605201978000,
                "value_change" => 6475,
            ],
            [
                "time" => 1605288378000,
                "value_change" => 6578.2,
            ],
            [
                "time" => 1605374778000,
                "value_change" => 7263.5,
            ],
            [
                "time" => 1605461178000,
                "value_change" => 7859.9,
            ],
            [
                "time" => 1605547578000,
                "value_change" => 7672.2,
            ],
            [
                "time" => 1605633978000,
                "value_change" => 7773.2,
            ],
            [
                "time" => 1605720378000,
                "value_change" => 8044.2,
            ],
            [
                "time" => 1605806778000,
                "value_change" => 8245,
            ],
            [
                "time" => 1605893178000,
                "value_change" => 8096,
            ],
            [
                "time" => 1605979578000,
                "value_change" => 8230,
            ],
            [
                "time" => 1606065978000,
                "value_change" => 7970,
            ],
            [
                "time" => 1606152378000,
                "value_change" => 8189,
            ],
            [
                "time" => 1606238778000,
                "value_change" => 8752.2,
            ],
            [
                "time" => 1606325178000,
                "value_change" => 9301,
            ],
            [
                "time" => 1606411578000,
                "value_change" => 9719.5,
            ],
            [
                "time" => 1606497978000,
                "value_change" => 9891.8,
            ],
            [
                "time" => 1606584378000,
                "value_change" => 9715.3,
            ],
            [
                "time" => 1606670778000,
                "value_change" => 9891.8,
            ],
            [
                "time" => 1606757178000,
                "value_change" => 10855,
            ],
            [
                "time" => 1606843578000,
                "value_change" => 10876,
            ],
            [
                "time" => 1606929978000,
                "value_change" => 11150.06904436,
            ],
            [
                "time" => 1607016378000,
                "value_change" => 11577,
            ],
            [
                "time" => 1607102778000,
                "value_change" => 11591,
            ],
            [
                "time" => 1607189178000,
                "value_change" => 13500,
            ],
            [
                "time" => 1607275578000,
                "value_change" => 16577,
            ],
            [
                "time" => 1607361978000,
                "value_change" => 15819.13456151,
            ],
            [
                "time" => 1607448378000,
                "value_change" => 14600,
            ],
            [
                "time" => 1607534778000,
                "value_change" => 14856,
            ],
            [
                "time" => 1607621178000,
                "value_change" => 16730,
            ],
            [
                "time" => 1607707578000,
                "value_change" => 16965,
            ],
            [
                "time" => 1607793978000,
                "value_change" => 16168,
            ],
            [
                "time" => 1607880378000,
                "value_change" => 16383,
            ],
            [
                "time" => 1607966778000,
                "value_change" => 17521,
            ],
            [
                "time" => 1608053178000,
                "value_change" => 19150,
            ],
            [
                "time" => 1608139578000,
                "value_change" => 18937,
            ],
            [
                "time" => 1608225978000,
                "value_change" => 18928,
            ],
            [
                "time" => 1608312378000,
                "value_change" => 17343,
            ],
            [
                "time" => 1608398778000,
                "value_change" => 16409.16203958,
            ],
            [
                "time" => 1608485178000,
                "value_change" => 15582,
            ],
            [
                "time" => 1608571578000,
                "value_change" => 13122,
            ],
            [
                "time" => 1608657978000,
                "value_change" => 13946,
            ],
            [
                "time" => 1608744378000,
                "value_change" => 13436,
            ],
            [
                "time" => 1608830778000,
                "value_change" => 13620,
            ],
            [
                "time" => 1608917178000,
                "value_change" => 15671,
            ],
            [
                "time" => 1609003578000,
                "value_change" => 15362,
            ],
            [
                "time" => 1609089978000,
                "value_change" => 14290,
            ],
            [
                "time" => 1609176378000,
                "value_change" => 14304,
            ],
            [
                "time" => 1609262778000,
                "value_change" => 12362,
            ],
            [
                "time" => 1609349178000,
                "value_change" => 13757,
            ],
            [
                "time" => 1609435578000,
                "value_change" => 13364,
            ],
            [
                "time" => 1609521978000,
                "value_change" => 14700,
            ],
            [
                "time" => 1609608378000,
                "value_change" => 15150,
            ],
            [
                "time" => 1609694778000,
                "value_change" => 15127,
            ],
            [
                "time" => 1609781178000,
                "value_change" => 16910,
            ],
            [
                "time" => 1609867578000,
                "value_change" => 17149,
            ],
            [
                "time" => 1609953978000,
                "value_change" => 16180,
            ],
            [
                "time" => 1610040378000,
                "value_change" => 14900,
            ],
            [
                "time" => 1610126778000,
                "value_change" => 14391,
            ],
            [
                "time" => 1610213178000,
                "value_change" => 14848,
            ],
            [
                "time" => 1610299578000,
                "value_change" => 13245,
            ],
            [
                "time" => 1610385978000,
                "value_change" => 13779,
            ],
            [
                "time" => 1610472378000,
                "value_change" => 14190,
            ],
            [
                "time" => 1610558778000,
                "value_change" => 13554,
            ],
            [
                "time" => 1610645178000,
                "value_change" => 13546,
            ],
            [
                "time" => 1610731578000,
                "value_change" => 11054,
            ],
            [
                "time" => 1610817978000,
                "value_change" => 11024,
            ],
            [
                "time" => 1610904378000,
                "value_change" => 11017,
            ],
            [
                "time" => 1610990778000,
                "value_change" => 11470,
            ],
            [
                "time" => 1611077178000,
                "value_change" => 12716,
            ],
            [
                "time" => 1611163578000,
                "value_change" => 11483,
            ],
            [
                "time" => 1611249978000,
                "value_change" => 10770,
            ],
            [
                "time" => 1611336378000,
                "value_change" => 10811,
            ],
            [
                "time" => 1611422778000,
                "value_change" => 11391,
            ],
            [
                "time" => 1611509178000,
                "value_change" => 11144,
            ],
            [
                "time" => 1611595578000,
                "value_change" => 11068,
            ],
            [
                "time" => 1611681978000,
                "value_change" => 11455,
            ],
            [
                "time" => 1611768378000,
                "value_change" => 11828,
            ],
            [
                "time" => 1611854778000,
                "value_change" => 11205,
            ],
            [
                "time" => 1611941178000,
                "value_change" => 10150,
            ],
            [
                "time" => 1612027578000,
                "value_change" => 10247,
            ],
            [
                "time" => 1612113978000,
                "value_change" => 9181,
            ],
            [
                "time" => 1612200378000,
                "value_change" => 8874,
            ],
            [
                "time" => 1612286778000,
                "value_change" => 9216.2,
            ],
            [
                "time" => 1612373178000,
                "value_change" => 8185.2,
            ],
            [
                "time" => 1612459578000,
                "value_change" => 6939.4,
            ],
            [
                "time" => 1612545978000,
                "value_change" => 7656,
            ],
            [
                "time" => 1612632378000,
                "value_change" => 7535,
            ],
            [
                "time" => 1612718778000,
                "value_change" => 8235,
            ],
            [
                "time" => 1612805178000,
                "value_change" => 8672.83405891,
            ],
            [
                "time" => 1612891578000,
                "value_change" => 8554.2,
            ],
            [
                "time" => 1612977978000,
                "value_change" => 8062,
            ],
            [
                "time" => 1613064378000,
                "value_change" => 8890.1,
            ],
            [
                "time" => 1613150778000,
                "value_change" => 8500,
            ],
            [
                "time" => 1613237178000,
                "value_change" => 9454.3,
            ],
            [
                "time" => 1613323578000,
                "value_change" => 9990.2,
            ],
            [
                "time" => 1613409978000,
                "value_change" => 10159,
            ],
            [
                "time" => 1613496378000,
                "value_change" => 11045,
            ],
            [
                "time" => 1613582778000,
                "value_change" => 10370,
            ],
            [
                "time" => 1613669178000,
                "value_change" => 11172,
            ],
            [
                "time" => 1613755578000,
                "value_change" => 11200,
            ],
            [
                "time" => 1613841978000,
                "value_change" => 10450,
            ],
            [
                "time" => 1613928378000,
                "value_change" => 9826.4,
            ],
            [
                "time" => 1614014778000,
                "value_change" => 10143,
            ],
            [
                "time" => 1614101178000,
                "value_change" => 9665,
            ],
            [
                "time" => 1614187578000,
                "value_change" => 9557.4,
            ],
            [
                "time" => 1614273978000,
                "value_change" => 10315,
            ],
            [
                "time" => 1614360378000,
                "value_change" => 10562,
            ],
            [
                "time" => 1614446778000,
                "value_change" => 10313.0025347,
            ],
            [
                "time" => 1614533178000,
                "value_change" => 10908,
            ],
            [
                "time" => 1614619578000,
                "value_change" => 11024,
            ],
            [
                "time" => 1614705978000,
                "value_change" => 11436,
            ],
            [
                "time" => 1614792378000,
                "value_change" => 11495,
            ],
            [
                "time" => 1614878778000,
                "value_change" => 11356,
            ],
            [
                "time" => 1614965178000,
                "value_change" => 10710,
            ],
            [
                "time" => 1615051578000,
                "value_change" => 9876.4,
            ],
            [
                "time" => 1615137978000,
                "value_change" => 9296.3,
            ],
            [
                "time" => 1615224378000,
                "value_change" => 9211,
            ],
            [
                "time" => 1615310778000,
                "value_change" => 8756.7,
            ],
            [
                "time" => 1615397178000,
                "value_change" => 9510.1,
            ],
            [
                "time" => 1615483578000,
                "value_change" => 9115.8,
            ],
            [
                "time" => 1615569978000,
                "value_change" => 9135,
            ],
            [
                "time" => 1615656378000,
                "value_change" => 8176,
            ],
            [
                "time" => 1615742778000,
                "value_change" => 8248.1,
            ],
            [
                "time" => 1615829178000,
                "value_change" => 8250,
            ],
            [
                "time" => 1615915578000,
                "value_change" => 7832,
            ],
            [
                "time" => 1616001978000,
                "value_change" => 8200.2,
            ],
            [
                "time" => 1616088378000,
                "value_change" => 8589,
            ],
            [
                "time" => 1616174778000,
                "value_change" => 8895.2,
            ],
            [
                "time" => 1616261178000,
                "value_change" => 8888,
            ],
            [
                "time" => 1616347578000,
                "value_change" => 8699.3,
            ],
            [
                "time" => 1616433978000,
                "value_change" => 8898,
            ],
            [
                "time" => 1616520378000,
                "value_change" => 8510.1,
            ],
            [
                "time" => 1616606778000,
                "value_change" => 8445,
            ],
            [
                "time" => 1616693178000,
                "value_change" => 8119,
            ],
            [
                "time" => 1616779578000,
                "value_change" => 7783.71121792,
            ],
            [
                "time" => 1616865978000,
                "value_change" => 7936,
            ],
            [
                "time" => 1616952378000,
                "value_change" => 7089,
            ],
            [
                "time" => 1617038778000,
                "value_change" => 6838.0008925,
            ],
            [
                "time" => 1617125178000,
                "value_change" => 6922,
            ],
            [
                "time" => 1617211578000,
                "value_change" => 6810,
            ],
            [
                "time" => 1617297978000,
                "value_change" => 7052,
            ],
            [
                "time" => 1617384378000,
                "value_change" => 7402.4,
            ],
            [
                "time" => 1617470778000,
                "value_change" => 6785.4,
            ],
            [
                "time" => 1617557178000,
                "value_change" => 6760.1,
            ],
            [
                "time" => 1617643578000,
                "value_change" => 6610,
            ],
            [
                "time" => 1617729978000,
                "value_change" => 6890.5,
            ],
            [
                "time" => 1617816378000,
                "value_change" => 7011.6,
            ],
            [
                "time" => 1617902778000,
                "value_change" => 6761.2,
            ],
            [
                "time" => 1617989178000,
                "value_change" => 6837.1,
            ],
            [
                "time" => 1618075578000,
                "value_change" => 6939.83316483,
            ],
            [
                "time" => 1618161978000,
                "value_change" => 7906,
            ],
            [
                "time" => 1618248378000,
                "value_change" => 7878.9,
            ],
            [
                "time" => 1618334778000,
                "value_change" => 7998.2,
            ],
            [
                "time" => 1618421178000,
                "value_change" => 8353.1,
            ],
            [
                "time" => 1618507578000,
                "value_change" => 8056.1,
            ],
            [
                "time" => 1618593978000,
                "value_change" => 7887.5,
            ],
            [
                "time" => 1618680378000,
                "value_change" => 8165.6,
            ],
            [
                "time" => 1618766778000,
                "value_change" => 8270.1,
            ],
            [
                "time" => 1618853178000,
                "value_change" => 8863.3,
            ],
            [
                "time" => 1618939578000,
                "value_change" => 8910.2,
            ],
            [
                "time" => 1619025978000,
                "value_change" => 8791.4,
            ],
            [
                "time" => 1619112378000,
                "value_change" => 8939.9,
            ],
            [
                "time" => 1619198778000,
                "value_change" => 9640.2,
            ],
            [
                "time" => 1619285178000,
                "value_change" => 8849.8,
            ],
            [
                "time" => 1619371578000,
                "value_change" => 9268.9,
            ],
            [
                "time" => 1619457978000,
                "value_change" => 8918,
            ],
            [
                "time" => 1619544378000,
                "value_change" => 9339.5,
            ],
            [
                "time" => 1619630778000,
                "value_change" => 9398.5,
            ],
            [
                "time" => 1619717178000,
                "value_change" => 9236.1,
            ],
            [
                "time" => 1619803578000,
                "value_change" => 9061.8,
            ],
            [
                "time" => 1619889978000,
                "value_change" => 9235,
            ],
            [
                "time" => 1619976378000,
                "value_change" => 9759,
            ],
            [
                "time" => 1620062778000,
                "value_change" => 9701.1,
            ],
            [
                "time" => 1620149178000,
                "value_change" => 9859.2,
            ],
            [
                "time" => 1620235578000,
                "value_change" => 9658.6,
            ],
            [
                "time" => 1620321978000,
                "value_change" => 9370,
            ],
            [
                "time" => 1620408378000,
                "value_change" => 9184.7,
            ],
            [
                "time" => 1620494778000,
                "value_change" => 9318.2,
            ],
            [
                "time" => 1620581178000,
                "value_change" => 9018,
            ],
            [
                "time" => 1620667578000,
                "value_change" => 8392.3,
            ],
            [
                "time" => 1620753978000,
                "value_change" => 8456.9,
            ],
            [
                "time" => 1620840378000,
                "value_change" => 8683.5,
            ],
            [
                "time" => 1620926778000,
                "value_change" => 8664.9,
            ],
            [
                "time" => 1621013178000,
                "value_change" => 8466,
            ],
            [
                "time" => 1621099578000,
                "value_change" => 8336,
            ],
            [
                "time" => 1621185978000,
                "value_change" => 8048.8,
            ],
            [
                "time" => 1621272378000,
                "value_change" => 8238.9,
            ],
            [
                "time" => 1621358778000,
                "value_change" => 8231,
            ],
            [
                "time" => 1621445178000,
                "value_change" => 8522.5,
            ],
            [
                "time" => 1621531578000,
                "value_change" => 8393.30566413,
            ],
            [
                "time" => 1621617978000,
                "value_change" => 7976.9,
            ],
            [
                "time" => 1621704378000,
                "value_change" => 7494.7,
            ],
            [
                "time" => 1621790778000,
                "value_change" => 7572.9,
            ],
            [
                "time" => 1621877178000,
                "value_change" => 7456.7,
            ],
            [
                "time" => 1621963578000,
                "value_change" => 7327.7,
            ],
            [
                "time" => 1622049978000,
                "value_change" => 7339.7,
            ],
            [
                "time" => 1622136378000,
                "value_change" => 7097.8,
            ],
            [
                "time" => 1622222778000,
                "value_change" => 7456.4,
            ],
            [
                "time" => 1622309178000,
                "value_change" => 7375.1,
            ],
            [
                "time" => 1622395578000,
                "value_change" => 7485.8,
            ],
            [
                "time" => 1622481978000,
                "value_change" => 7521,
            ],
            [
                "time" => 1622568378000,
                "value_change" => 7638,
            ],
            [
                "time" => 1622654778000,
                "value_change" => 7718,
            ],
            [
                "time" => 1622741178000,
                "value_change" => 7488.3,
            ],
            [
                "time" => 1622827578000,
                "value_change" => 7621.6,
            ],
            [
                "time" => 1622913978000,
                "value_change" => 7653.1,
            ],
            [
                "time" => 1623000378000,
                "value_change" => 7688.9,
            ],
            [
                "time" => 1623086778000,
                "value_change" => 7615.1,
            ],
            [
                "time" => 1623173178000,
                "value_change" => 7496.8,
            ],
            [
                "time" => 1623259578000,
                "value_change" => 6749.9,
            ],
            [
                "time" => 1623345978000,
                "value_change" => 6873.3,
            ],
            [
                "time" => 1623432378000,
                "value_change" => 6542.3,
            ],
            [
                "time" => 1623518778000,
                "value_change" => 6291.1,
            ],
            [
                "time" => 1623605178000,
                "value_change" => 6629.2,
            ],
            [
                "time" => 1623691578000,
                "value_change" => 6381.8,
            ],
            [
                "time" => 1623777978000,
                "value_change" => 6485.1,
            ],
            [
                "time" => 1623864378000,
                "value_change" => 6435.7,
            ],
            [
                "time" => 1623950778000,
                "value_change" => 6709.2,
            ],
            [
                "time" => 1624037178000,
                "value_change" => 6734.7,
            ],
            [
                "time" => 1624123578000,
                "value_change" => 6760.4,
            ],
            [
                "time" => 1624209978000,
                "value_change" => 6713.4,
            ],
            [
                "time" => 1624296378000,
                "value_change" => 6042.4,
            ],
            [
                "time" => 1624382778000,
                "value_change" => 6151.9,
            ],
            [
                "time" => 1624469178000,
                "value_change" => 6147.77370907,
            ],
            [
                "time" => 1624555578000,
                "value_change" => 6246.5,
            ],
            [
                "time" => 1624641978000,
                "value_change" => 6073.4,
            ],
            [
                "time" => 1624728378000,
                "value_change" => 6133,
            ],
            [
                "time" => 1624814778000,
                "value_change" => 5848,
            ],
            [
                "time" => 1624901178000,
                "value_change" => 6208.1,
            ],
            [
                "time" => 1624987578000,
                "value_change" => 6391.5,
            ],
            [
                "time" => 1625073978000,
                "value_change" => 6349.6,
            ],
            [
                "time" => 1625160378000,
                "value_change" => 6617.6,
            ],
            [
                "time" => 1625246778000,
                "value_change" => 6499.9,
            ],
            [
                "time" => 1625333178000,
                "value_change" => 6589.9,
            ],
            [
                "time" => 1625419578000,
                "value_change" => 6531.3,
            ],
            [
                "time" => 1625505978000,
                "value_change" => 6601.3,
            ],
            [
                "time" => 1625592378000,
                "value_change" => 6761.4,
            ],
            [
                "time" => 1625678778000,
                "value_change" => 6707,
            ],
            [
                "time" => 1625765178000,
                "value_change" => 6660,
            ],
            [
                "time" => 1625851578000,
                "value_change" => 6300.8,
            ],
            [
                "time" => 1625937978000,
                "value_change" => 6377.8,
            ],
            [
                "time" => 1626024378000,
                "value_change" => 6231.3,
            ],
            [
                "time" => 1626110778000,
                "value_change" => 6220,
            ],
            [
                "time" => 1626197178000,
                "value_change" => 6250,
            ],
            [
                "time" => 1626283578000,
                "value_change" => 6346.4,
            ],
            [
                "time" => 1626369978000,
                "value_change" => 6723.4,
            ],
            [
                "time" => 1626456378000,
                "value_change" => 7319.8,
            ],
            [
                "time" => 1626542778000,
                "value_change" => 7366.2,
            ],
            [
                "time" => 1626629178000,
                "value_change" => 7473.5,
            ],
            [
                "time" => 1626715578000,
                "value_change" => 7332.3,
            ],
            [
                "time" => 1626801978000,
                "value_change" => 7403.3,
            ],
            [
                "time" => 1626888378000,
                "value_change" => 7397.6,
            ],
            [
                "time" => 1626974778000,
                "value_change" => 7713.57080162,
            ],
            [
                "time" => 1627061178000,
                "value_change" => 8385.1,
            ],
            [
                "time" => 1627147578000,
                "value_change" => 8171.9,
            ],
            [
                "time" => 1627233978000,
                "value_change" => 7939,
            ],
            [
                "time" => 1627320378000,
                "value_change" => 8176.6,
            ],
            [
                "time" => 1627406778000,
                "value_change" => 8213,
            ],
            [
                "time" => 1627493178000,
                "value_change" => 8220.9,
            ],
            [
                "time" => 1627579578000,
                "value_change" => 8171.3,
            ],
            [
                "time" => 1627665978000,
                "value_change" => 7728.3,
            ],
            [
                "time" => 1627752378000,
                "value_change" => 7606,
            ],
            [
                "time" => 1627838778000,
                "value_change" => 7535.2,
            ],
            [
                "time" => 1627925178000,
                "value_change" => 7416.3,
            ],
            [
                "time" => 1628011578000,
                "value_change" => 7013.2,
            ],
            [
                "time" => 1628097978000,
                "value_change" => 7025.8,
            ],
            [
                "time" => 1628184378000,
                "value_change" => 6936.6,
            ],
            [
                "time" => 1628270778000,
                "value_change" => 6716.1,
            ],
            [
                "time" => 1628357178000,
                "value_change" => 6274.4,
            ],
            [
                "time" => 1628443578000,
                "value_change" => 6529,
            ],
            [
                "time" => 1628529978000,
                "value_change" => 6143,
            ],
            [
                "time" => 1628616378000,
                "value_change" => 6221.3,
            ],
            [
                "time" => 1628702778000,
                "value_change" => 6313.9,
            ],
            [
                "time" => 1628789178000,
                "value_change" => 6251.9,
            ],
            [
                "time" => 1628875578000,
                "value_change" => 6185.9,
            ],
            [
                "time" => 1628961978000,
                "value_change" => 6270.1,
            ],
            [
                "time" => 1629048378000,
                "value_change" => 6311,
            ],
            [
                "time" => 1629134778000,
                "value_change" => 6582.4,
            ],
            [
                "time" => 1629221178000,
                "value_change" => 6390.7,
            ],
            [
                "time" => 1629307578000,
                "value_change" => 6485.1,
            ],
            [
                "time" => 1629393978000,
                "value_change" => 6255,
            ],
            [
                "time" => 1629480378000,
                "value_change" => 6479,
            ],
            [
                "time" => 1629566778000,
                "value_change" => 6354.8,
            ],
            [
                "time" => 1629653178000,
                "value_change" => 6527.1,
            ],
            [
                "time" => 1629739578000,
                "value_change" => 6693.3,
            ],
            [
                "time" => 1629825978000,
                "value_change" => 6732.9,
            ],
            [
                "time" => 1629912378000,
                "value_change" => 6707,
            ],
            [
                "time" => 1629998778000,
                "value_change" => 6903,
            ],
            [
                "time" => 1630085178000,
                "value_change" => 7078.4,
            ],
            [
                "time" => 1630171578000,
                "value_change" => 7039,
            ],
            [
                "time" => 1630257978000,
                "value_change" => 6986,
            ],
            [
                "time" => 1630344378000,
                "value_change" => 7010,
            ],
            [
                "time" => 1630430778000,
                "value_change" => 7197.4,
            ],
            [
                "time" => 1630517178000,
                "value_change" => 7294.9,
            ],
            [
                "time" => 1630603578000,
                "value_change" => 7267.8,
            ],
            [
                "time" => 1630689978000,
                "value_change" => 7358.9,
            ],
            [
                "time" => 1630776378000,
                "value_change" => 6702.3,
            ],
            [
                "time" => 1630862778000,
                "value_change" => 6513,
            ],
            [
                "time" => 1630949178000,
                "value_change" => 6395.8,
            ],
            [
                "time" => 1631035578000,
                "value_change" => 6184.9,
            ],
            [
                "time" => 1631121978000,
                "value_change" => 6239.657985,
            ],
            [
                "time" => 1631208378000,
                "value_change" => 6313.8,
            ],
            [
                "time" => 1631294778000,
                "value_change" => 6289.9,
            ],
            [
                "time" => 1631381178000,
                "value_change" => 6328.23084565,
            ],
            [
                "time" => 1631467578000,
                "value_change" => 6483.8,
            ],
            [
                "time" => 1631553978000,
                "value_change" => 6480.1,
            ],
            [
                "time" => 1631640378000,
                "value_change" => 6511.15172704,
            ],
            [
                "time" => 1631726778000,
                "value_change" => 6498.4,
            ],
            [
                "time" => 1631813178000,
                "value_change" => 6252,
            ],
            [
                "time" => 1631899578000,
                "value_change" => 6325.6,
            ],
            [
                "time" => 1631985978000,
                "value_change" => 6390.9,
            ],
            [
                "time" => 1632072378000,
                "value_change" => 6493.9,
            ],
            [
                "time" => 1632158778000,
                "value_change" => 6761.8,
            ],
            [
                "time" => 1632245178000,
                "value_change" => 6723,
            ],
            [
                "time" => 1632331578000,
                "value_change" => 6710,
            ],
            [
                "time" => 1632417978000,
                "value_change" => 6585,
            ],
            [
                "time" => 1632504378000,
                "value_change" => 6438.8,
            ],
            [
                "time" => 1632590778000,
                "value_change" => 6462.3,
            ],
            [
                "time" => 1632677178000,
                "value_change" => 6688.980708,
            ],
            [
                "time" => 1632763578000,
                "value_change" => 6635.2,
            ],
            [
                "time" => 1632849978000,
                "value_change" => 6594.49720746,
            ],
            [
                "time" => 1632936378000,
                "value_change" => 6620.6,
            ],
            [
                "time" => 1633022778000,
                "value_change" => 6600.8,
            ],
            [
                "time" => 1633109178000,
                "value_change" => 6527.5,
            ],
            [
                "time" => 1633195578000,
                "value_change" => 6503.049072,
            ],
            [
                "time" => 1633281978000,
                "value_change" => 6590.35025828,
            ],
            [
                "time" => 1633368378000,
                "value_change" => 6639.9,
            ],
            [
                "time" => 1633454778000,
                "value_change" => 6592.8,
            ],
            [
                "time" => 1633541178000,
                "value_change" => 6608.8855767,
            ],
            [
                "time" => 1633627578000,
                "value_change" => 6673.2,
            ],
            [
                "time" => 1633713978000,
                "value_change" => 6663,
            ],
            [
                "time" => 1633800378000,
                "value_change" => 6630,
            ],
            [
                "time" => 1633886778000,
                "value_change" => 6251.8,
            ],
            [
                "time" => 1633973178000,
                "value_change" => 6291.9,
            ],
            [
                "time" => 1634059578000,
                "value_change" => 6326.5,
            ],
            [
                "time" => 1634145978000,
                "value_change" => 6335.2,
            ],
            [
                "time" => 1634232378000,
                "value_change" => 6741.9,
            ],
            [
                "time" => 1634318778000,
                "value_change" => 6754.1,
            ],
            [
                "time" => 1634405178000,
                "value_change" => 6735.3,
            ],
            [
                "time" => 1634491578000,
                "value_change" => 6613.2,
            ],
            [
                "time" => 1634577978000,
                "value_change" => 6520.5,
            ],
            [
                "time" => 1634664378000,
                "value_change" => 6581.5,
            ],
            [
                "time" => 1634750778000,
                "value_change" => 6590.9,
            ],
            [
                "time" => 1634837178000,
                "value_change" => 6567.22352,
            ],
            [
                "time" => 1634923578000,
                "value_change" => 6550,
            ],
            [
                "time" => 1635009978000,
                "value_change" => 6554.1,
            ],
            [
                "time" => 1635096378000,
                "value_change" => 6528,
            ],
            [
                "time" => 1635182778000,
                "value_change" => 6531.47722621,
            ],
            [
                "time" => 1635269178000,
                "value_change" => 6500.2,
            ],
            [
                "time" => 1635355578000,
                "value_change" => 6490.1,
            ],
            [
                "time" => 1635441978000,
                "value_change" => 6346.5,
            ],
            [
                "time" => 1635528378000,
                "value_change" => 6330.1,
            ],
            [
                "time" => 1635614778000,
                "value_change" => 6368.3871592,
            ],
            [
                "time" => 1635701178000,
                "value_change" => 6399.7,
            ],
            [
                "time" => 1635787578000,
                "value_change" => 6426.9,
            ],
            [
                "time" => 1635873978000,
                "value_change" => 6387.9,
            ],
            [
                "time" => 1635960378000,
                "value_change" => 6490.4,
            ],
            [
                "time" => 1636046778000,
                "value_change" => 6470.10159871,
            ],
            [
                "time" => 1636133178000,
                "value_change" => 6515.2545699,
            ],
            [
                "time" => 1636219578000,
                "value_change" => 6572.9,
            ],
            [
                "time" => 1636305978000,
                "value_change" => 6475.3,
            ],
            [
                "time" => 1636392378000,
                "value_change" => 6417.6,
            ],
            [
                "time" => 1636478778000,
                "value_change" => 6431,
            ],
            [
                "time" => 1636565178000,
                "value_change" => 6447.9,
            ],
            [
                "time" => 1636651578000,
                "value_change" => 6446.9,
            ],
            [
                "time" => 1636737978000,
                "value_change" => 6459.0694273,
            ],
            [
                "time" => 1636824378000,
                "value_change" => 5920.5,
            ],
            [
                "time" => 1636910778000,
                "value_change" => 5748.2,
            ],
            [
                "time" => 1636997178000,
                "value_change" => 5655.7,
            ],
            [
                "time" => 1637083578000,
                "value_change" => 5628.3,
            ],
            [
                "time" => 1637169978000,
                "value_change" => 5659.5,
            ],
            [
                "time" => 1637256378000,
                "value_change" => 4918.9,
            ],
            [
                "time" => 1637342778000,
                "value_change" => 4570.9,
            ],
            [
                "time" => 1637429178000,
                "value_change" => 4662.7,
            ],
            [
                "time" => 1637515578000,
                "value_change" => 4352.9,
            ],
            [
                "time" => 1637601978000,
                "value_change" => 4422.7,
            ],
            [
                "time" => 1637688378000,
                "value_change" => 3928,
            ],
            [
                "time" => 1637774778000,
                "value_change" => 4087.8,
            ],
            [
                "time" => 1637861178000,
                "value_change" => 3859.9,
            ],
            [
                "time" => 1637947578000,
                "value_change" => 3881.9,
            ],
            [
                "time" => 1638033978000,
                "value_change" => 4304.9,
            ],
            [
                "time" => 1638120378000,
                "value_change" => 4319.6,
            ],
            [
                "time" => 1638206778000,
                "value_change" => 4039.4,
            ],
            [
                "time" => 1638293178000,
                "value_change" => 4241.3,
            ],
            [
                "time" => 1638379578000,
                "value_change" => 4162.5,
            ],
            [
                "time" => 1638465978000,
                "value_change" => 3901.2,
            ],
            [
                "time" => 1638552378000,
                "value_change" => 3981.9,
            ],
            [
                "time" => 1638638778000,
                "value_change" => 3763.3,
            ],
            [
                "time" => 1638725178000,
                "value_change" => 3514.9,
            ],
            [
                "time" => 1638811578000,
                "value_change" => 3457.5,
            ],
            [
                "time" => 1638897978000,
                "value_change" => 3503.2,
            ],
            [
                "time" => 1638984378000,
                "value_change" => 3638.4,
            ],
            [
                "time" => 1639070778000,
                "value_change" => 3523,
            ],
            [
                "time" => 1639157178000,
                "value_change" => 3435.2813778,
            ],
            [
                "time" => 1639243578000,
                "value_change" => 3535.1,
            ],
            [
                "time" => 1639329978000,
                "value_change" => 3352.36408211,
            ],
            [
                "time" => 1639416378000,
                "value_change" => 3281.7,
            ],
            [
                "time" => 1639502778000,
                "value_change" => 3283.4,
            ],
            [
                "time" => 1639589178000,
                "value_change" => 3299.9,
            ],
            [
                "time" => 1639675578000,
                "value_change" => 3624.7,
            ],
            [
                "time" => 1639761978000,
                "value_change" => 3778.5,
            ],
            [
                "time" => 1639848378000,
                "value_change" => 3810,
            ],
            [
                "time" => 1639934778000,
                "value_change" => 4214.5,
            ],
            [
                "time" => 1640021178000,
                "value_change" => 3971,
            ],
            [
                "time" => 1640107578000,
                "value_change" => 4128,
            ],
            [
                "time" => 1640193978000,
                "value_change" => 4070.9,
            ],
            [
                "time" => 1640280378000,
                "value_change" => 4140.7,
            ],
            [
                "time" => 1640366778000,
                "value_change" => 3906.8,
            ],
            [
                "time" => 1640453178000,
                "value_change" => 3929.8,
            ],
            [
                "time" => 1640539578000,
                "value_change" => 3712,
            ],
            [
                "time" => 1640625978000,
                "value_change" => 4036.7,
            ],
            [
                "time" => 1640712378000,
                "value_change" => 3861.5,
            ],
            [
                "time" => 1640798778000,
                "value_change" => 3972.8,
            ],
            [
                "time" => 1640885178000,
                "value_change" => 3830.3483292,
            ],
        ])->mapWithKeys(function($price) {
            return [(floor($price['time'] / 1000 / 86400) * 86400 - 3600) => $price['value_change']];
        });

        $accountBalances = [];
    
        
        while($date <= Carbon::now()->addDay()){
            $deposits = Deposit::where('time', '<', $date)->where('status', 'Completed')->get()->sum('amount');
            $withdrawals = Withdrawal::where('time', '<', $date)->get()->sum('amount');

            $account = $deposits - $withdrawals;

            $bitcoin_price = $bitcoin[$date->getTimestamp()];

            $accountBalances[] =  [
                "time" => $date->getTimestamp() * 1000,
                "value_change" => $account * ($bitcoin_price / 1000)
            ];
            
            $date->addDay();
        }


            

        // $accountBalances[0] = 

        return $accountBalances;
    }

    public function data()
    {
        return
            [
            [
                "time" => 1577899578000,
                "value_change" => 997.39,
            ],
            [
                "time" => 1577985978000,
                "value_change" => 1019.2,
            ],
            [
                "time" => 1578072378000,
                "value_change" => 1037.5,
            ],
            [
                "time" => 1578158778000,
                "value_change" => 1138,
            ],
            [
                "time" => 1578245178000,
                "value_change" => 1003.2,
            ],
            [
                "time" => 1578331578000,
                "value_change" => 898,
            ],
            [
                "time" => 1578417978000,
                "value_change" => 908,
            ],
            [
                "time" => 1578504378000,
                "value_change" => 915.9,
            ],
            [
                "time" => 1578590778000,
                "value_change" => 903,
            ],
            [
                "time" => 1578677178000,
                "value_change" => 905.51,
            ],
            [
                "time" => 1578763578000,
                "value_change" => 778.58,
            ],
            [
                "time" => 1578849978000,
                "value_change" => 803.62,
            ],
            [
                "time" => 1578936378000,
                "value_change" => 828.12,
            ],
            [
                "time" => 1579022778000,
                "value_change" => 815.3,
            ],
            [
                "time" => 1579109178000,
                "value_change" => 820.74,
            ],
            [
                "time" => 1579195578000,
                "value_change" => 830.06,
            ],
            [
                "time" => 1579281978000,
                "value_change" => 903.98,
            ],
            [
                "time" => 1579368378000,
                "value_change" => 887.46,
            ],
            [
                "time" => 1579454778000,
                "value_change" => 900.29,
            ],
            [
                "time" => 1579541178000,
                "value_change" => 895.74,
            ],
            [
                "time" => 1579627578000,
                "value_change" => 924.02,
            ],
            [
                "time" => 1579713978000,
                "value_change" => 923.72,
            ],
            [
                "time" => 1579800378000,
                "value_change" => 905.99,
            ],
            [
                "time" => 1579886778000,
                "value_change" => 885.66,
            ],
            [
                "time" => 1579973178000,
                "value_change" => 893.35,
            ],
            [
                "time" => 1580059578000,
                "value_change" => 915.12,
            ],
            [
                "time" => 1580145978000,
                "value_change" => 916.7,
            ],
            [
                "time" => 1580232378000,
                "value_change" => 919.43,
            ],
            [
                "time" => 1580318778000,
                "value_change" => 912.55,
            ],
            [
                "time" => 1580405178000,
                "value_change" => 917.35,
            ],
            [
                "time" => 1580491578000,
                "value_change" => 966.19,
            ],
            [
                "time" => 1580577978000,
                "value_change" => 983.73,
            ],
            [
                "time" => 1580664378000,
                "value_change" => 1005.7,
            ],
            [
                "time" => 1580750778000,
                "value_change" => 1015,
            ],
            [
                "time" => 1580837178000,
                "value_change" => 1031.1,
            ],
            [
                "time" => 1580923578000,
                "value_change" => 1006.6,
            ],
            [
                "time" => 1581009978000,
                "value_change" => 1022.5,
            ],
            [
                "time" => 1581096378000,
                "value_change" => 1052.1,
            ],
            [
                "time" => 1581182778000,
                "value_change" => 1048.8,
            ],
            [
                "time" => 1581269178000,
                "value_change" => 984.96,
            ],
            [
                "time" => 1581355578000,
                "value_change" => 992,
            ],
            [
                "time" => 1581441978000,
                "value_change" => 1000.1,
            ],
            [
                "time" => 1581528378000,
                "value_change" => 996.01,
            ],
            [
                "time" => 1581614778000,
                "value_change" => 996.5,
            ],
            [
                "time" => 1581701178000,
                "value_change" => 1013.2,
            ],
            [
                "time" => 1581787578000,
                "value_change" => 1013.9,
            ],
            [
                "time" => 1581873978000,
                "value_change" => 1038.2,
            ],
            [
                "time" => 1581960378000,
                "value_change" => 1055,
            ],
            [
                "time" => 1582046778000,
                "value_change" => 1059.7,
            ],
            [
                "time" => 1582133178000,
                "value_change" => 1056.2,
            ],
            [
                "time" => 1582219578000,
                "value_change" => 1090.7,
            ],
            [
                "time" => 1582305978000,
                "value_change" => 1129.6,
            ],
            [
                "time" => 1582392378000,
                "value_change" => 1125.5,
            ],
            [
                "time" => 1582478778000,
                "value_change" => 1184.7,
            ],
            [
                "time" => 1582565178000,
                "value_change" => 1185.1,
            ],
            [
                "time" => 1582651578000,
                "value_change" => 1153,
            ],
            [
                "time" => 1582737978000,
                "value_change" => 1178.3,
            ],
            [
                "time" => 1582824378000,
                "value_change" => 1194.9,
            ],
            [
                "time" => 1582910778000,
                "value_change" => 1189.1,
            ],
            [
                "time" => 1582997178000,
                "value_change" => 1231.6,
            ],
            [
                "time" => 1583083578000,
                "value_change" => 1257,
            ],
            [
                "time" => 1583169978000,
                "value_change" => 1288.1,
            ],
            [
                "time" => 1583256378000,
                "value_change" => 1267.1,
            ],
            [
                "time" => 1583342778000,
                "value_change" => 1278.4,
            ],
            [
                "time" => 1583429178000,
                "value_change" => 1279.2,
            ],
            [
                "time" => 1583515578000,
                "value_change" => 1232.2,
            ],
            [
                "time" => 1583601978000,
                "value_change" => 1148.5,
            ],
            [
                "time" => 1583688378000,
                "value_change" => 1190.4,
            ],
            [
                "time" => 1583774778000,
                "value_change" => 1111.6,
            ],
            [
                "time" => 1583861178000,
                "value_change" => 1172.4,
            ],
            [
                "time" => 1583947578000,
                "value_change" => 1224.4,
            ],
            [
                "time" => 1584033978000,
                "value_change" => 1238.2,
            ],
            [
                "time" => 1584120378000,
                "value_change" => 1244.3,
            ],
            [
                "time" => 1584206778000,
                "value_change" => 1256.1,
            ],
            [
                "time" => 1584293178000,
                "value_change" => 1168.6,
            ],
            [
                "time" => 1584379578000,
                "value_change" => 1067.8,
            ],
            [
                "time" => 1584465978000,
                "value_change" => 966.8,
            ],
            [
                "time" => 1584552378000,
                "value_change" => 1016.1,
            ],
            [
                "time" => 1584638778000,
                "value_change" => 1038.3,
            ],
            [
                "time" => 1584725178000,
                "value_change" => 1115,
            ],
            [
                "time" => 1584811578000,
                "value_change" => 1038.7,
            ],
            [
                "time" => 1584897978000,
                "value_change" => 1032.7,
            ],
            [
                "time" => 1584984378000,
                "value_change" => 942.13,
            ],
            [
                "time" => 1585070778000,
                "value_change" => 972,
            ],
            [
                "time" => 1585157178000,
                "value_change" => 968.53,
            ],
            [
                "time" => 1585243578000,
                "value_change" => 1042.7,
            ],
            [
                "time" => 1585329978000,
                "value_change" => 1044.1,
            ],
            [
                "time" => 1585416378000,
                "value_change" => 1041.3,
            ],
            [
                "time" => 1585502778000,
                "value_change" => 1041,
            ],
            [
                "time" => 1585589178000,
                "value_change" => 1081.3,
            ],
            [
                "time" => 1585675578000,
                "value_change" => 1093.1,
            ],
            [
                "time" => 1585761978000,
                "value_change" => 1106.6,
            ],
            [
                "time" => 1585848378000,
                "value_change" => 1150.1,
            ],
            [
                "time" => 1585934778000,
                "value_change" => 1145,
            ],
            [
                "time" => 1586021178000,
                "value_change" => 1140.3,
            ],
            [
                "time" => 1586107578000,
                "value_change" => 1191.5,
            ],
            [
                "time" => 1586193978000,
                "value_change" => 1196.6,
            ],
            [
                "time" => 1586280378000,
                "value_change" => 1188.1,
            ],
            [
                "time" => 1586366778000,
                "value_change" => 1215.9,
            ],
            [
                "time" => 1586453178000,
                "value_change" => 1219.6,
            ],
            [
                "time" => 1586539578000,
                "value_change" => 1233.4,
            ],
            [
                "time" => 1586625978000,
                "value_change" => 1227.4,
            ],
            [
                "time" => 1586712378000,
                "value_change" => 1186.9,
            ],
            [
                "time" => 1586798778000,
                "value_change" => 1206.7,
            ],
            [
                "time" => 1586885178000,
                "value_change" => 1193.3,
            ],
            [
                "time" => 1586971578000,
                "value_change" => 1212,
            ],
            [
                "time" => 1587057978000,
                "value_change" => 1239.1,
            ],
            [
                "time" => 1587144378000,
                "value_change" => 1265,
            ],
            [
                "time" => 1587230778000,
                "value_change" => 1260.5,
            ],
            [
                "time" => 1587317178000,
                "value_change" => 1305.6,
            ],
            [
                "time" => 1587403578000,
                "value_change" => 1325.6,
            ],
            [
                "time" => 1587489978000,
                "value_change" => 1345.3,
            ],
            [
                "time" => 1587576378000,
                "value_change" => 1354.6,
            ],
            [
                "time" => 1587662778000,
                "value_change" => 1344.8,
            ],
            [
                "time" => 1587749178000,
                "value_change" => 1370.3,
            ],
            [
                "time" => 1587835578000,
                "value_change" => 1399.3,
            ],
            [
                "time" => 1587921978000,
                "value_change" => 1440.2,
            ],
            [
                "time" => 1588008378000,
                "value_change" => 1415.6,
            ],
            [
                "time" => 1588094778000,
                "value_change" => 1423.5,
            ],
            [
                "time" => 1588181178000,
                "value_change" => 1435,
            ],
            [
                "time" => 1588267578000,
                "value_change" => 1533,
            ],
            [
                "time" => 1588353978000,
                "value_change" => 1558.5,
            ],
            [
                "time" => 1588440378000,
                "value_change" => 1617.8,
            ],
            [
                "time" => 1588526778000,
                "value_change" => 1606,
            ],
            [
                "time" => 1588613178000,
                "value_change" => 1545.1,
            ],
            [
                "time" => 1588699578000,
                "value_change" => 1596.7,
            ],
            [
                "time" => 1588785978000,
                "value_change" => 1618.6,
            ],
            [
                "time" => 1588872378000,
                "value_change" => 1702.7,
            ],
            [
                "time" => 1588958778000,
                "value_change" => 1758.1,
            ],
            [
                "time" => 1589045178000,
                "value_change" => 1796.8,
            ],
            [
                "time" => 1589131578000,
                "value_change" => 1853.9,
            ],
            [
                "time" => 1589217978000,
                "value_change" => 1735,
            ],
            [
                "time" => 1589304378000,
                "value_change" => 1819.4,
            ],
            [
                "time" => 1589390778000,
                "value_change" => 1825.4,
            ],
            [
                "time" => 1589477178000,
                "value_change" => 1772,
            ],
            [
                "time" => 1589563578000,
                "value_change" => 1785.6,
            ],
            [
                "time" => 1589649978000,
                "value_change" => 1870,
            ],
            [
                "time" => 1589736378000,
                "value_change" => 1941.5,
            ],
            [
                "time" => 1589822778000,
                "value_change" => 1965.6,
            ],
            [
                "time" => 1589909178000,
                "value_change" => 2059.3,
            ],
            [
                "time" => 1589995578000,
                "value_change" => 2026.5,
            ],
            [
                "time" => 1590081978000,
                "value_change" => 2085.1,
            ],
            [
                "time" => 1590168378000,
                "value_change" => 2245.1,
            ],
            [
                "time" => 1590254778000,
                "value_change" => 2393.7,
            ],
            [
                "time" => 1590341178000,
                "value_change" => 2238.8,
            ],
            [
                "time" => 1590427578000,
                "value_change" => 2123.7,
            ],
            [
                "time" => 1590513978000,
                "value_change" => 1967.1,
            ],
            [
                "time" => 1590600378000,
                "value_change" => 2056.6,
            ],
            [
                "time" => 1590686778000,
                "value_change" => 2206.6,
            ],
            [
                "time" => 1590773178000,
                "value_change" => 2139,
            ],
            [
                "time" => 1590859578000,
                "value_change" => 2190.81430883,
            ],
            [
                "time" => 1590945978000,
                "value_change" => 2311,
            ],
            [
                "time" => 1591032378000,
                "value_change" => 2403.3,
            ],
            [
                "time" => 1591118778000,
                "value_change" => 2460.3,
            ],
            [
                "time" => 1591205178000,
                "value_change" => 2485,
            ],
            [
                "time" => 1591291578000,
                "value_change" => 2635,
            ],
            [
                "time" => 1591377978000,
                "value_change" => 2840,
            ],
            [
                "time" => 1591464378000,
                "value_change" => 2642.06391499,
            ],
            [
                "time" => 1591550778000,
                "value_change" => 2780,
            ],
            [
                "time" => 1591637178000,
                "value_change" => 2808.9,
            ],
            [
                "time" => 1591723578000,
                "value_change" => 2806,
            ],
            [
                "time" => 1591809978000,
                "value_change" => 2936.3,
            ],
            [
                "time" => 1591896378000,
                "value_change" => 2569.6,
            ],
            [
                "time" => 1591982778000,
                "value_change" => 2675.5,
            ],
            [
                "time" => 1592069178000,
                "value_change" => 2392.5740205,
            ],
            [
                "time" => 1592155578000,
                "value_change" => 2370.1,
            ],
            [
                "time" => 1592241978000,
                "value_change" => 2434.1,
            ],
            [
                "time" => 1592328378000,
                "value_change" => 2610,
            ],
            [
                "time" => 1592414778000,
                "value_change" => 2491.4,
            ],
            [
                "time" => 1592501178000,
                "value_change" => 2580.1,
            ],
            [
                "time" => 1592587578000,
                "value_change" => 2712.2,
            ],
            [
                "time" => 1592673978000,
                "value_change" => 2621.2,
            ],
            [
                "time" => 1592760378000,
                "value_change" => 2672.7,
            ],
            [
                "time" => 1592846778000,
                "value_change" => 2673,
            ],
            [
                "time" => 1592933178000,
                "value_change" => 2501,
            ],
            [
                "time" => 1593019578000,
                "value_change" => 2477.7,
            ],
            [
                "time" => 1593105978000,
                "value_change" => 2390.3,
            ],
            [
                "time" => 1593192378000,
                "value_change" => 2520.4,
            ],
            [
                "time" => 1593278778000,
                "value_change" => 2518.2,
            ],
            [
                "time" => 1593365178000,
                "value_change" => 2470.09520927,
            ],
            [
                "time" => 1593451578000,
                "value_change" => 2420.6,
            ],
            [
                "time" => 1593537978000,
                "value_change" => 2346.2,
            ],
            [
                "time" => 1593624378000,
                "value_change" => 2443.3,
            ],
            [
                "time" => 1593710778000,
                "value_change" => 2524,
            ],
            [
                "time" => 1593797178000,
                "value_change" => 2579.9,
            ],
            [
                "time" => 1593883578000,
                "value_change" => 2598.5,
            ],
            [
                "time" => 1593969978000,
                "value_change" => 2593,
            ],
            [
                "time" => 1594056378000,
                "value_change" => 2477.2,
            ],
            [
                "time" => 1594142778000,
                "value_change" => 2541.5,
            ],
            [
                "time" => 1594229178000,
                "value_change" => 2475,
            ],
            [
                "time" => 1594315578000,
                "value_change" => 2317.5,
            ],
            [
                "time" => 1594401978000,
                "value_change" => 2282.1,
            ],
            [
                "time" => 1594488378000,
                "value_change" => 2374.4,
            ],
            [
                "time" => 1594574778000,
                "value_change" => 2327.4,
            ],
            [
                "time" => 1594661178000,
                "value_change" => 2205.1,
            ],
            [
                "time" => 1594747578000,
                "value_change" => 1976.4,
            ],
            [
                "time" => 1594833978000,
                "value_change" => 1924.9,
            ],
            [
                "time" => 1594920378000,
                "value_change" => 2218.8,
            ],
            [
                "time" => 1595006778000,
                "value_change" => 2300,
            ],
            [
                "time" => 1595093178000,
                "value_change" => 2248.2,
            ],
            [
                "time" => 1595179578000,
                "value_change" => 2849.9,
            ],
            [
                "time" => 1595265978000,
                "value_change" => 2659,
            ],
            [
                "time" => 1595352378000,
                "value_change" => 2842,
            ],
            [
                "time" => 1595438778000,
                "value_change" => 2746.9,
            ],
            [
                "time" => 1595525178000,
                "value_change" => 2769.7,
            ],
            [
                "time" => 1595611578000,
                "value_change" => 2560.9,
            ],
            [
                "time" => 1595697978000,
                "value_change" => 2525,
            ],
            [
                "time" => 1595784378000,
                "value_change" => 2663.1,
            ],
            [
                "time" => 1595870778000,
                "value_change" => 2784.8,
            ],
            [
                "time" => 1595957178000,
                "value_change" => 2713.1,
            ],
            [
                "time" => 1596043578000,
                "value_change" => 2747.4,
            ],
            [
                "time" => 1596129978000,
                "value_change" => 2854.1,
            ],
            [
                "time" => 1596216378000,
                "value_change" => 2730.1,
            ],
            [
                "time" => 1596302778000,
                "value_change" => 2702,
            ],
            [
                "time" => 1596389178000,
                "value_change" => 2790.3,
            ],
            [
                "time" => 1596475578000,
                "value_change" => 2859.9,
            ],
            [
                "time" => 1596561978000,
                "value_change" => 3252.3,
            ],
            [
                "time" => 1596648378000,
                "value_change" => 3225,
            ],
            [
                "time" => 1596734778000,
                "value_change" => 3395.8,
            ],
            [
                "time" => 1596821178000,
                "value_change" => 3413.9,
            ],
            [
                "time" => 1596907578000,
                "value_change" => 3338.9,
            ],
            [
                "time" => 1596993978000,
                "value_change" => 3403.7,
            ],
            [
                "time" => 1597080378000,
                "value_change" => 3642.1,
            ],
            [
                "time" => 1597166778000,
                "value_change" => 3865.2,
            ],
            [
                "time" => 1597253178000,
                "value_change" => 4051.6,
            ],
            [
                "time" => 1597339578000,
                "value_change" => 4319.2,
            ],
            [
                "time" => 1597425978000,
                "value_change" => 4151.8,
            ],
            [
                "time" => 1597512378000,
                "value_change" => 4386.3,
            ],
            [
                "time" => 1597598778000,
                "value_change" => 4258.5,
            ],
            [
                "time" => 1597685178000,
                "value_change" => 4090.1,
            ],
            [
                "time" => 1597771578000,
                "value_change" => 4140.1,
            ],
            [
                "time" => 1597857978000,
                "value_change" => 4060,
            ],
            [
                "time" => 1597944378000,
                "value_change" => 3993,
            ],
            [
                "time" => 1598030778000,
                "value_change" => 4073.5,
            ],
            [
                "time" => 1598117178000,
                "value_change" => 4126,
            ],
            [
                "time" => 1598203578000,
                "value_change" => 4322.1,
            ],
            [
                "time" => 1598289978000,
                "value_change" => 4349.3,
            ],
            [
                "time" => 1598376378000,
                "value_change" => 4340.3,
            ],
            [
                "time" => 1598462778000,
                "value_change" => 4330.2,
            ],
            [
                "time" => 1598549178000,
                "value_change" => 4383,
            ],
            [
                "time" => 1598635578000,
                "value_change" => 4585.7,
            ],
            [
                "time" => 1598721978000,
                "value_change" => 4568,
            ],
            [
                "time" => 1598808378000,
                "value_change" => 4718.2,
            ],
            [
                "time" => 1598894778000,
                "value_change" => 4903,
            ],
            [
                "time" => 1598981178000,
                "value_change" => 4532.1,
            ],
            [
                "time" => 1599067578000,
                "value_change" => 4594.9,
            ],
            [
                "time" => 1599153978000,
                "value_change" => 4195.5,
            ],
            [
                "time" => 1599240378000,
                "value_change" => 4374.8,
            ],
            [
                "time" => 1599326778000,
                "value_change" => 4589.1,
            ],
            [
                "time" => 1599413178000,
                "value_change" => 4612.2,
            ],
            [
                "time" => 1599499578000,
                "value_change" => 4304,
            ],
            [
                "time" => 1599585978000,
                "value_change" => 4315.4,
            ],
            [
                "time" => 1599672378000,
                "value_change" => 4230,
            ],
            [
                "time" => 1599758778000,
                "value_change" => 4198.7,
            ],
            [
                "time" => 1599845178000,
                "value_change" => 4144.7,
            ],
            [
                "time" => 1599931578000,
                "value_change" => 3849.6,
            ],
            [
                "time" => 1600017978000,
                "value_change" => 3235.3,
            ],
            [
                "time" => 1600104378000,
                "value_change" => 3696.2,
            ],
            [
                "time" => 1600190778000,
                "value_change" => 3675.2,
            ],
            [
                "time" => 1600277178000,
                "value_change" => 3664.3,
            ],
            [
                "time" => 1600363578000,
                "value_change" => 4083.9,
            ],
            [
                "time" => 1600449978000,
                "value_change" => 3892.2,
            ],
            [
                "time" => 1600536378000,
                "value_change" => 3872,
            ],
            [
                "time" => 1600622778000,
                "value_change" => 3596.7,
            ],
            [
                "time" => 1600709178000,
                "value_change" => 3592.9,
            ],
            [
                "time" => 1600795578000,
                "value_change" => 3770.8,
            ],
            [
                "time" => 1600881978000,
                "value_change" => 3652.7,
            ],
            [
                "time" => 1600968378000,
                "value_change" => 3930,
            ],
            [
                "time" => 1601054778000,
                "value_change" => 3881.3,
            ],
            [
                "time" => 1601141178000,
                "value_change" => 4205.1,
            ],
            [
                "time" => 1601227578000,
                "value_change" => 4190,
            ],
            [
                "time" => 1601313978000,
                "value_change" => 4168,
            ],
            [
                "time" => 1601400378000,
                "value_change" => 4367,
            ],
            [
                "time" => 1601486778000,
                "value_change" => 4403.7,
            ],
            [
                "time" => 1601573178000,
                "value_change" => 4400.1,
            ],
            [
                "time" => 1601659578000,
                "value_change" => 4309.1,
            ],
            [
                "time" => 1601745978000,
                "value_change" => 4215.1,
            ],
            [
                "time" => 1601832378000,
                "value_change" => 4311.3,
            ],
            [
                "time" => 1601918778000,
                "value_change" => 4370,
            ],
            [
                "time" => 1602005178000,
                "value_change" => 4435.6,
            ],
            [
                "time" => 1602091578000,
                "value_change" => 4611.8,
            ],
            [
                "time" => 1602177978000,
                "value_change" => 4782.2,
            ],
            [
                "time" => 1602264378000,
                "value_change" => 4770,
            ],
            [
                "time" => 1602350778000,
                "value_change" => 4824.8,
            ],
            [
                "time" => 1602437178000,
                "value_change" => 5438.7,
            ],
            [
                "time" => 1602523578000,
                "value_change" => 5636.7,
            ],
            [
                "time" => 1602609978000,
                "value_change" => 5833,
            ],
            [
                "time" => 1602696378000,
                "value_change" => 5708,
            ],
            [
                "time" => 1602782778000,
                "value_change" => 5764.3,
            ],
            [
                "time" => 1602869178000,
                "value_change" => 5595,
            ],
            [
                "time" => 1602955578000,
                "value_change" => 5564.9,
            ],
            [
                "time" => 1603041978000,
                "value_change" => 5693.9,
            ],
            [
                "time" => 1603128378000,
                "value_change" => 5981.1,
            ],
            [
                "time" => 1603214778000,
                "value_change" => 6005.1,
            ],
            [
                "time" => 1603301178000,
                "value_change" => 5980.5,
            ],
            [
                "time" => 1603387578000,
                "value_change" => 5905.3,
            ],
            [
                "time" => 1603473978000,
                "value_change" => 5509.5,
            ],
            [
                "time" => 1603560378000,
                "value_change" => 5722,
            ],
            [
                "time" => 1603646778000,
                "value_change" => 5884.9,
            ],
            [
                "time" => 1603733178000,
                "value_change" => 5757.8,
            ],
            [
                "time" => 1603819578000,
                "value_change" => 5714,
            ],
            [
                "time" => 1603905978000,
                "value_change" => 6150,
            ],
            [
                "time" => 1603992378000,
                "value_change" => 6124,
            ],
            [
                "time" => 1604078778000,
                "value_change" => 6451,
            ],
            [
                "time" => 1604165178000,
                "value_change" => 6726.3,
            ],
            [
                "time" => 1604251578000,
                "value_change" => 7015.1,
            ],
            [
                "time" => 1604337978000,
                "value_change" => 7123,
            ],
            [
                "time" => 1604424378000,
                "value_change" => 7367.3,
            ],
            [
                "time" => 1604510778000,
                "value_change" => 7365,
            ],
            [
                "time" => 1604597178000,
                "value_change" => 6945.8,
            ],
            [
                "time" => 1604683578000,
                "value_change" => 7098,
            ],
            [
                "time" => 1604769978000,
                "value_change" => 7442.7,
            ],
            [
                "time" => 1604856378000,
                "value_change" => 7120,
            ],
            [
                "time" => 1604942778000,
                "value_change" => 6541.2,
            ],
            [
                "time" => 1605029178000,
                "value_change" => 6299.1,
            ],
            [
                "time" => 1605115578000,
                "value_change" => 5810.7,
            ],
            [
                "time" => 1605201978000,
                "value_change" => 6475,
            ],
            [
                "time" => 1605288378000,
                "value_change" => 6578.2,
            ],
            [
                "time" => 1605374778000,
                "value_change" => 7263.5,
            ],
            [
                "time" => 1605461178000,
                "value_change" => 7859.9,
            ],
            [
                "time" => 1605547578000,
                "value_change" => 7672.2,
            ],
            [
                "time" => 1605633978000,
                "value_change" => 7773.2,
            ],
            [
                "time" => 1605720378000,
                "value_change" => 8044.2,
            ],
            [
                "time" => 1605806778000,
                "value_change" => 8245,
            ],
            [
                "time" => 1605893178000,
                "value_change" => 8096,
            ],
            [
                "time" => 1605979578000,
                "value_change" => 8230,
            ],
            [
                "time" => 1606065978000,
                "value_change" => 7970,
            ],
            [
                "time" => 1606152378000,
                "value_change" => 8189,
            ],
            [
                "time" => 1606238778000,
                "value_change" => 8752.2,
            ],
            [
                "time" => 1606325178000,
                "value_change" => 9301,
            ],
            [
                "time" => 1606411578000,
                "value_change" => 9719.5,
            ],
            [
                "time" => 1606497978000,
                "value_change" => 9891.8,
            ],
            [
                "time" => 1606584378000,
                "value_change" => 9715.3,
            ],
            [
                "time" => 1606670778000,
                "value_change" => 9891.8,
            ],
            [
                "time" => 1606757178000,
                "value_change" => 10855,
            ],
            [
                "time" => 1606843578000,
                "value_change" => 10876,
            ],
            [
                "time" => 1606929978000,
                "value_change" => 11150.06904436,
            ],
            [
                "time" => 1607016378000,
                "value_change" => 11577,
            ],
            [
                "time" => 1607102778000,
                "value_change" => 11591,
            ],
            [
                "time" => 1607189178000,
                "value_change" => 13500,
            ],
            [
                "time" => 1607275578000,
                "value_change" => 16577,
            ],
            [
                "time" => 1607361978000,
                "value_change" => 15819.13456151,
            ],
            [
                "time" => 1607448378000,
                "value_change" => 14600,
            ],
            [
                "time" => 1607534778000,
                "value_change" => 14856,
            ],
            [
                "time" => 1607621178000,
                "value_change" => 16730,
            ],
            [
                "time" => 1607707578000,
                "value_change" => 16965,
            ],
            [
                "time" => 1607793978000,
                "value_change" => 16168,
            ],
            [
                "time" => 1607880378000,
                "value_change" => 16383,
            ],
            [
                "time" => 1607966778000,
                "value_change" => 17521,
            ],
            [
                "time" => 1608053178000,
                "value_change" => 19150,
            ],
            [
                "time" => 1608139578000,
                "value_change" => 18937,
            ],
            [
                "time" => 1608225978000,
                "value_change" => 18928,
            ],
            [
                "time" => 1608312378000,
                "value_change" => 17343,
            ],
            [
                "time" => 1608398778000,
                "value_change" => 16409.16203958,
            ],
            [
                "time" => 1608485178000,
                "value_change" => 15582,
            ],
            [
                "time" => 1608571578000,
                "value_change" => 13122,
            ],
            [
                "time" => 1608657978000,
                "value_change" => 13946,
            ],
            [
                "time" => 1608744378000,
                "value_change" => 13436,
            ],
            [
                "time" => 1608830778000,
                "value_change" => 13620,
            ],
            [
                "time" => 1608917178000,
                "value_change" => 15671,
            ],
            [
                "time" => 1609003578000,
                "value_change" => 15362,
            ],
            [
                "time" => 1609089978000,
                "value_change" => 14290,
            ],
            [
                "time" => 1609176378000,
                "value_change" => 14304,
            ],
            [
                "time" => 1609262778000,
                "value_change" => 12362,
            ],
            [
                "time" => 1609349178000,
                "value_change" => 13757,
            ],
            [
                "time" => 1609435578000,
                "value_change" => 13364,
            ],
            [
                "time" => 1609521978000,
                "value_change" => 14700,
            ],
            [
                "time" => 1609608378000,
                "value_change" => 15150,
            ],
            [
                "time" => 1609694778000,
                "value_change" => 15127,
            ],
            [
                "time" => 1609781178000,
                "value_change" => 16910,
            ],
            [
                "time" => 1609867578000,
                "value_change" => 17149,
            ],
            [
                "time" => 1609953978000,
                "value_change" => 16180,
            ],
            [
                "time" => 1610040378000,
                "value_change" => 14900,
            ],
            [
                "time" => 1610126778000,
                "value_change" => 14391,
            ],
            [
                "time" => 1610213178000,
                "value_change" => 14848,
            ],
            [
                "time" => 1610299578000,
                "value_change" => 13245,
            ],
            [
                "time" => 1610385978000,
                "value_change" => 13779,
            ],
            [
                "time" => 1610472378000,
                "value_change" => 14190,
            ],
            [
                "time" => 1610558778000,
                "value_change" => 13554,
            ],
            [
                "time" => 1610645178000,
                "value_change" => 13546,
            ],
            [
                "time" => 1610731578000,
                "value_change" => 11054,
            ],
            [
                "time" => 1610817978000,
                "value_change" => 11024,
            ],
            [
                "time" => 1610904378000,
                "value_change" => 11017,
            ],
            [
                "time" => 1610990778000,
                "value_change" => 11470,
            ],
            [
                "time" => 1611077178000,
                "value_change" => 12716,
            ],
            [
                "time" => 1611163578000,
                "value_change" => 11483,
            ],
            [
                "time" => 1611249978000,
                "value_change" => 10770,
            ],
            [
                "time" => 1611336378000,
                "value_change" => 10811,
            ],
            [
                "time" => 1611422778000,
                "value_change" => 11391,
            ],
            [
                "time" => 1611509178000,
                "value_change" => 11144,
            ],
            [
                "time" => 1611595578000,
                "value_change" => 11068,
            ],
            [
                "time" => 1611681978000,
                "value_change" => 11455,
            ],
            [
                "time" => 1611768378000,
                "value_change" => 11828,
            ],
            [
                "time" => 1611854778000,
                "value_change" => 11205,
            ],
            [
                "time" => 1611941178000,
                "value_change" => 10150,
            ],
            [
                "time" => 1612027578000,
                "value_change" => 10247,
            ],
            [
                "time" => 1612113978000,
                "value_change" => 9181,
            ],
            [
                "time" => 1612200378000,
                "value_change" => 8874,
            ],
            [
                "time" => 1612286778000,
                "value_change" => 9216.2,
            ],
            [
                "time" => 1612373178000,
                "value_change" => 8185.2,
            ],
            [
                "time" => 1612459578000,
                "value_change" => 6939.4,
            ],
            [
                "time" => 1612545978000,
                "value_change" => 7656,
            ],
            [
                "time" => 1612632378000,
                "value_change" => 7535,
            ],
            [
                "time" => 1612718778000,
                "value_change" => 8235,
            ],
            [
                "time" => 1612805178000,
                "value_change" => 8672.83405891,
            ],
            [
                "time" => 1612891578000,
                "value_change" => 8554.2,
            ],
            [
                "time" => 1612977978000,
                "value_change" => 8062,
            ],
            [
                "time" => 1613064378000,
                "value_change" => 8890.1,
            ],
            [
                "time" => 1613150778000,
                "value_change" => 8500,
            ],
            [
                "time" => 1613237178000,
                "value_change" => 9454.3,
            ],
            [
                "time" => 1613323578000,
                "value_change" => 9990.2,
            ],
            [
                "time" => 1613409978000,
                "value_change" => 10159,
            ],
            [
                "time" => 1613496378000,
                "value_change" => 11045,
            ],
            [
                "time" => 1613582778000,
                "value_change" => 10370,
            ],
            [
                "time" => 1613669178000,
                "value_change" => 11172,
            ],
            [
                "time" => 1613755578000,
                "value_change" => 11200,
            ],
            [
                "time" => 1613841978000,
                "value_change" => 10450,
            ],
            [
                "time" => 1613928378000,
                "value_change" => 9826.4,
            ],
            [
                "time" => 1614014778000,
                "value_change" => 10143,
            ],
            [
                "time" => 1614101178000,
                "value_change" => 9665,
            ],
            [
                "time" => 1614187578000,
                "value_change" => 9557.4,
            ],
            [
                "time" => 1614273978000,
                "value_change" => 10315,
            ],
            [
                "time" => 1614360378000,
                "value_change" => 10562,
            ],
            [
                "time" => 1614446778000,
                "value_change" => 10313.0025347,
            ],
            [
                "time" => 1614533178000,
                "value_change" => 10908,
            ],
            [
                "time" => 1614619578000,
                "value_change" => 11024,
            ],
            [
                "time" => 1614705978000,
                "value_change" => 11436,
            ],
            [
                "time" => 1614792378000,
                "value_change" => 11495,
            ],
            [
                "time" => 1614878778000,
                "value_change" => 11356,
            ],
            [
                "time" => 1614965178000,
                "value_change" => 10710,
            ],
            [
                "time" => 1615051578000,
                "value_change" => 9876.4,
            ],
            [
                "time" => 1615137978000,
                "value_change" => 9296.3,
            ],
            [
                "time" => 1615224378000,
                "value_change" => 9211,
            ],
            [
                "time" => 1615310778000,
                "value_change" => 8756.7,
            ],
            [
                "time" => 1615397178000,
                "value_change" => 9510.1,
            ],
            [
                "time" => 1615483578000,
                "value_change" => 9115.8,
            ],
            [
                "time" => 1615569978000,
                "value_change" => 9135,
            ],
            [
                "time" => 1615656378000,
                "value_change" => 8176,
            ],
            [
                "time" => 1615742778000,
                "value_change" => 8248.1,
            ],
            [
                "time" => 1615829178000,
                "value_change" => 8250,
            ],
            [
                "time" => 1615915578000,
                "value_change" => 7832,
            ],
            [
                "time" => 1616001978000,
                "value_change" => 8200.2,
            ],
            [
                "time" => 1616088378000,
                "value_change" => 8589,
            ],
            [
                "time" => 1616174778000,
                "value_change" => 8895.2,
            ],
            [
                "time" => 1616261178000,
                "value_change" => 8888,
            ],
            [
                "time" => 1616347578000,
                "value_change" => 8699.3,
            ],
            [
                "time" => 1616433978000,
                "value_change" => 8898,
            ],
            [
                "time" => 1616520378000,
                "value_change" => 8510.1,
            ],
            [
                "time" => 1616606778000,
                "value_change" => 8445,
            ],
            [
                "time" => 1616693178000,
                "value_change" => 8119,
            ],
            [
                "time" => 1616779578000,
                "value_change" => 7783.71121792,
            ],
            [
                "time" => 1616865978000,
                "value_change" => 7936,
            ],
            [
                "time" => 1616952378000,
                "value_change" => 7089,
            ],
            [
                "time" => 1617038778000,
                "value_change" => 6838.0008925,
            ],
            [
                "time" => 1617125178000,
                "value_change" => 6922,
            ],
            [
                "time" => 1617211578000,
                "value_change" => 6810,
            ],
            [
                "time" => 1617297978000,
                "value_change" => 7052,
            ],
            [
                "time" => 1617384378000,
                "value_change" => 7402.4,
            ],
            [
                "time" => 1617470778000,
                "value_change" => 6785.4,
            ],
            [
                "time" => 1617557178000,
                "value_change" => 6760.1,
            ],
            [
                "time" => 1617643578000,
                "value_change" => 6610,
            ],
            [
                "time" => 1617729978000,
                "value_change" => 6890.5,
            ],
            [
                "time" => 1617816378000,
                "value_change" => 7011.6,
            ],
            [
                "time" => 1617902778000,
                "value_change" => 6761.2,
            ],
            [
                "time" => 1617989178000,
                "value_change" => 6837.1,
            ],
            [
                "time" => 1618075578000,
                "value_change" => 6939.83316483,
            ],
            [
                "time" => 1618161978000,
                "value_change" => 7906,
            ],
            [
                "time" => 1618248378000,
                "value_change" => 7878.9,
            ],
            [
                "time" => 1618334778000,
                "value_change" => 7998.2,
            ],
            [
                "time" => 1618421178000,
                "value_change" => 8353.1,
            ],
            [
                "time" => 1618507578000,
                "value_change" => 8056.1,
            ],
            [
                "time" => 1618593978000,
                "value_change" => 7887.5,
            ],
            [
                "time" => 1618680378000,
                "value_change" => 8165.6,
            ],
            [
                "time" => 1618766778000,
                "value_change" => 8270.1,
            ],
            [
                "time" => 1618853178000,
                "value_change" => 8863.3,
            ],
            [
                "time" => 1618939578000,
                "value_change" => 8910.2,
            ],
            [
                "time" => 1619025978000,
                "value_change" => 8791.4,
            ],
            [
                "time" => 1619112378000,
                "value_change" => 8939.9,
            ],
            [
                "time" => 1619198778000,
                "value_change" => 9640.2,
            ],
            [
                "time" => 1619285178000,
                "value_change" => 8849.8,
            ],
            [
                "time" => 1619371578000,
                "value_change" => 9268.9,
            ],
            [
                "time" => 1619457978000,
                "value_change" => 8918,
            ],
            [
                "time" => 1619544378000,
                "value_change" => 9339.5,
            ],
            [
                "time" => 1619630778000,
                "value_change" => 9398.5,
            ],
            [
                "time" => 1619717178000,
                "value_change" => 9236.1,
            ],
            [
                "time" => 1619803578000,
                "value_change" => 9061.8,
            ],
            [
                "time" => 1619889978000,
                "value_change" => 9235,
            ],
            [
                "time" => 1619976378000,
                "value_change" => 9759,
            ],
            [
                "time" => 1620062778000,
                "value_change" => 9701.1,
            ],
            [
                "time" => 1620149178000,
                "value_change" => 9859.2,
            ],
            [
                "time" => 1620235578000,
                "value_change" => 9658.6,
            ],
            [
                "time" => 1620321978000,
                "value_change" => 9370,
            ],
            [
                "time" => 1620408378000,
                "value_change" => 9184.7,
            ],
            [
                "time" => 1620494778000,
                "value_change" => 9318.2,
            ],
            [
                "time" => 1620581178000,
                "value_change" => 9018,
            ],
            [
                "time" => 1620667578000,
                "value_change" => 8392.3,
            ],
            [
                "time" => 1620753978000,
                "value_change" => 8456.9,
            ],
            [
                "time" => 1620840378000,
                "value_change" => 8683.5,
            ],
            [
                "time" => 1620926778000,
                "value_change" => 8664.9,
            ],
            [
                "time" => 1621013178000,
                "value_change" => 8466,
            ],
            [
                "time" => 1621099578000,
                "value_change" => 8336,
            ],
            [
                "time" => 1621185978000,
                "value_change" => 8048.8,
            ],
            [
                "time" => 1621272378000,
                "value_change" => 8238.9,
            ],
            [
                "time" => 1621358778000,
                "value_change" => 8231,
            ],
            [
                "time" => 1621445178000,
                "value_change" => 8522.5,
            ],
            [
                "time" => 1621531578000,
                "value_change" => 8393.30566413,
            ],
            [
                "time" => 1621617978000,
                "value_change" => 7976.9,
            ],
            [
                "time" => 1621704378000,
                "value_change" => 7494.7,
            ],
            [
                "time" => 1621790778000,
                "value_change" => 7572.9,
            ],
            [
                "time" => 1621877178000,
                "value_change" => 7456.7,
            ],
            [
                "time" => 1621963578000,
                "value_change" => 7327.7,
            ],
            [
                "time" => 1622049978000,
                "value_change" => 7339.7,
            ],
            [
                "time" => 1622136378000,
                "value_change" => 7097.8,
            ],
            [
                "time" => 1622222778000,
                "value_change" => 7456.4,
            ],
            [
                "time" => 1622309178000,
                "value_change" => 7375.1,
            ],
            [
                "time" => 1622395578000,
                "value_change" => 7485.8,
            ],
            [
                "time" => 1622481978000,
                "value_change" => 7521,
            ],
            [
                "time" => 1622568378000,
                "value_change" => 7638,
            ],
            [
                "time" => 1622654778000,
                "value_change" => 7718,
            ],
            [
                "time" => 1622741178000,
                "value_change" => 7488.3,
            ],
            [
                "time" => 1622827578000,
                "value_change" => 7621.6,
            ],
            [
                "time" => 1622913978000,
                "value_change" => 7653.1,
            ],
            [
                "time" => 1623000378000,
                "value_change" => 7688.9,
            ],
            [
                "time" => 1623086778000,
                "value_change" => 7615.1,
            ],
            [
                "time" => 1623173178000,
                "value_change" => 7496.8,
            ],
            [
                "time" => 1623259578000,
                "value_change" => 6749.9,
            ],
            [
                "time" => 1623345978000,
                "value_change" => 6873.3,
            ],
            [
                "time" => 1623432378000,
                "value_change" => 6542.3,
            ],
            [
                "time" => 1623518778000,
                "value_change" => 6291.1,
            ],
            [
                "time" => 1623605178000,
                "value_change" => 6629.2,
            ],
            [
                "time" => 1623691578000,
                "value_change" => 6381.8,
            ],
            [
                "time" => 1623777978000,
                "value_change" => 6485.1,
            ],
            [
                "time" => 1623864378000,
                "value_change" => 6435.7,
            ],
            [
                "time" => 1623950778000,
                "value_change" => 6709.2,
            ],
            [
                "time" => 1624037178000,
                "value_change" => 6734.7,
            ],
            [
                "time" => 1624123578000,
                "value_change" => 6760.4,
            ],
            [
                "time" => 1624209978000,
                "value_change" => 6713.4,
            ],
            [
                "time" => 1624296378000,
                "value_change" => 6042.4,
            ],
            [
                "time" => 1624382778000,
                "value_change" => 6151.9,
            ],
            [
                "time" => 1624469178000,
                "value_change" => 6147.77370907,
            ],
            [
                "time" => 1624555578000,
                "value_change" => 6246.5,
            ],
            [
                "time" => 1624641978000,
                "value_change" => 6073.4,
            ],
            [
                "time" => 1624728378000,
                "value_change" => 6133,
            ],
            [
                "time" => 1624814778000,
                "value_change" => 5848,
            ],
            [
                "time" => 1624901178000,
                "value_change" => 6208.1,
            ],
            [
                "time" => 1624987578000,
                "value_change" => 6391.5,
            ],
            [
                "time" => 1625073978000,
                "value_change" => 6349.6,
            ],
            [
                "time" => 1625160378000,
                "value_change" => 6617.6,
            ],
            [
                "time" => 1625246778000,
                "value_change" => 6499.9,
            ],
            [
                "time" => 1625333178000,
                "value_change" => 6589.9,
            ],
            [
                "time" => 1625419578000,
                "value_change" => 6531.3,
            ],
            [
                "time" => 1625505978000,
                "value_change" => 6601.3,
            ],
            [
                "time" => 1625592378000,
                "value_change" => 6761.4,
            ],
            [
                "time" => 1625678778000,
                "value_change" => 6707,
            ],
            [
                "time" => 1625765178000,
                "value_change" => 6660,
            ],
            [
                "time" => 1625851578000,
                "value_change" => 6300.8,
            ],
            [
                "time" => 1625937978000,
                "value_change" => 6377.8,
            ],
            [
                "time" => 1626024378000,
                "value_change" => 6231.3,
            ],
            [
                "time" => 1626110778000,
                "value_change" => 6220,
            ],
            [
                "time" => 1626197178000,
                "value_change" => 6250,
            ],
            [
                "time" => 1626283578000,
                "value_change" => 6346.4,
            ],
            [
                "time" => 1626369978000,
                "value_change" => 6723.4,
            ],
            [
                "time" => 1626456378000,
                "value_change" => 7319.8,
            ],
            [
                "time" => 1626542778000,
                "value_change" => 7366.2,
            ],
            [
                "time" => 1626629178000,
                "value_change" => 7473.5,
            ],
            [
                "time" => 1626715578000,
                "value_change" => 7332.3,
            ],
            [
                "time" => 1626801978000,
                "value_change" => 7403.3,
            ],
            [
                "time" => 1626888378000,
                "value_change" => 7397.6,
            ],
            [
                "time" => 1626974778000,
                "value_change" => 7713.57080162,
            ],
            [
                "time" => 1627061178000,
                "value_change" => 8385.1,
            ],
            [
                "time" => 1627147578000,
                "value_change" => 8171.9,
            ],
            [
                "time" => 1627233978000,
                "value_change" => 7939,
            ],
            [
                "time" => 1627320378000,
                "value_change" => 8176.6,
            ],
            [
                "time" => 1627406778000,
                "value_change" => 8213,
            ],
            [
                "time" => 1627493178000,
                "value_change" => 8220.9,
            ],
            [
                "time" => 1627579578000,
                "value_change" => 8171.3,
            ],
            [
                "time" => 1627665978000,
                "value_change" => 7728.3,
            ],
            [
                "time" => 1627752378000,
                "value_change" => 7606,
            ],
            [
                "time" => 1627838778000,
                "value_change" => 7535.2,
            ],
            [
                "time" => 1627925178000,
                "value_change" => 7416.3,
            ],
            [
                "time" => 1628011578000,
                "value_change" => 7013.2,
            ],
            [
                "time" => 1628097978000,
                "value_change" => 7025.8,
            ],
            [
                "time" => 1628184378000,
                "value_change" => 6936.6,
            ],
            [
                "time" => 1628270778000,
                "value_change" => 6716.1,
            ],
            [
                "time" => 1628357178000,
                "value_change" => 6274.4,
            ],
            [
                "time" => 1628443578000,
                "value_change" => 6529,
            ],
            [
                "time" => 1628529978000,
                "value_change" => 6143,
            ],
            [
                "time" => 1628616378000,
                "value_change" => 6221.3,
            ],
            [
                "time" => 1628702778000,
                "value_change" => 6313.9,
            ],
            [
                "time" => 1628789178000,
                "value_change" => 6251.9,
            ],
            [
                "time" => 1628875578000,
                "value_change" => 6185.9,
            ],
            [
                "time" => 1628961978000,
                "value_change" => 6270.1,
            ],
            [
                "time" => 1629048378000,
                "value_change" => 6311,
            ],
            [
                "time" => 1629134778000,
                "value_change" => 6582.4,
            ],
            [
                "time" => 1629221178000,
                "value_change" => 6390.7,
            ],
            [
                "time" => 1629307578000,
                "value_change" => 6485.1,
            ],
            [
                "time" => 1629393978000,
                "value_change" => 6255,
            ],
            [
                "time" => 1629480378000,
                "value_change" => 6479,
            ],
            [
                "time" => 1629566778000,
                "value_change" => 6354.8,
            ],
            [
                "time" => 1629653178000,
                "value_change" => 6527.1,
            ],
            [
                "time" => 1629739578000,
                "value_change" => 6693.3,
            ],
            [
                "time" => 1629825978000,
                "value_change" => 6732.9,
            ],
            [
                "time" => 1629912378000,
                "value_change" => 6707,
            ],
            [
                "time" => 1629998778000,
                "value_change" => 6903,
            ],
            [
                "time" => 1630085178000,
                "value_change" => 7078.4,
            ],
            [
                "time" => 1630171578000,
                "value_change" => 7039,
            ],
            [
                "time" => 1630257978000,
                "value_change" => 6986,
            ],
            [
                "time" => 1630344378000,
                "value_change" => 7010,
            ],
            [
                "time" => 1630430778000,
                "value_change" => 7197.4,
            ],
            [
                "time" => 1630517178000,
                "value_change" => 7294.9,
            ],
            [
                "time" => 1630603578000,
                "value_change" => 7267.8,
            ],
            [
                "time" => 1630689978000,
                "value_change" => 7358.9,
            ],
            [
                "time" => 1630776378000,
                "value_change" => 6702.3,
            ],
            [
                "time" => 1630862778000,
                "value_change" => 6513,
            ],
            [
                "time" => 1630949178000,
                "value_change" => 6395.8,
            ],
            [
                "time" => 1631035578000,
                "value_change" => 6184.9,
            ],
            [
                "time" => 1631121978000,
                "value_change" => 6239.657985,
            ],
            [
                "time" => 1631208378000,
                "value_change" => 6313.8,
            ],
            [
                "time" => 1631294778000,
                "value_change" => 6289.9,
            ],
            [
                "time" => 1631381178000,
                "value_change" => 6328.23084565,
            ],
            [
                "time" => 1631467578000,
                "value_change" => 6483.8,
            ],
            [
                "time" => 1631553978000,
                "value_change" => 6480.1,
            ],
            [
                "time" => 1631640378000,
                "value_change" => 6511.15172704,
            ],
            [
                "time" => 1631726778000,
                "value_change" => 6498.4,
            ],
            [
                "time" => 1631813178000,
                "value_change" => 6252,
            ],
            [
                "time" => 1631899578000,
                "value_change" => 6325.6,
            ],
            [
                "time" => 1631985978000,
                "value_change" => 6390.9,
            ],
            [
                "time" => 1632072378000,
                "value_change" => 6493.9,
            ],
            [
                "time" => 1632158778000,
                "value_change" => 6761.8,
            ],
            [
                "time" => 1632245178000,
                "value_change" => 6723,
            ],
            [
                "time" => 1632331578000,
                "value_change" => 6710,
            ],
            [
                "time" => 1632417978000,
                "value_change" => 6585,
            ],
            [
                "time" => 1632504378000,
                "value_change" => 6438.8,
            ],
            [
                "time" => 1632590778000,
                "value_change" => 6462.3,
            ],
            [
                "time" => 1632677178000,
                "value_change" => 6688.980708,
            ],
            [
                "time" => 1632763578000,
                "value_change" => 6635.2,
            ],
            [
                "time" => 1632849978000,
                "value_change" => 6594.49720746,
            ],
            [
                "time" => 1632936378000,
                "value_change" => 6620.6,
            ],
            [
                "time" => 1633022778000,
                "value_change" => 6600.8,
            ],
            [
                "time" => 1633109178000,
                "value_change" => 6527.5,
            ],
            [
                "time" => 1633195578000,
                "value_change" => 6503.049072,
            ],
            [
                "time" => 1633281978000,
                "value_change" => 6590.35025828,
            ],
            [
                "time" => 1633368378000,
                "value_change" => 6639.9,
            ],
            [
                "time" => 1633454778000,
                "value_change" => 6592.8,
            ],
            [
                "time" => 1633541178000,
                "value_change" => 6608.8855767,
            ],
            [
                "time" => 1633627578000,
                "value_change" => 6673.2,
            ],
            [
                "time" => 1633713978000,
                "value_change" => 6663,
            ],
            [
                "time" => 1633800378000,
                "value_change" => 6630,
            ],
            [
                "time" => 1633886778000,
                "value_change" => 6251.8,
            ],
            [
                "time" => 1633973178000,
                "value_change" => 6291.9,
            ],
            [
                "time" => 1634059578000,
                "value_change" => 6326.5,
            ],
            [
                "time" => 1634145978000,
                "value_change" => 6335.2,
            ],
            [
                "time" => 1634232378000,
                "value_change" => 6741.9,
            ],
            [
                "time" => 1634318778000,
                "value_change" => 6754.1,
            ],
            [
                "time" => 1634405178000,
                "value_change" => 6735.3,
            ],
            [
                "time" => 1634491578000,
                "value_change" => 6613.2,
            ],
            [
                "time" => 1634577978000,
                "value_change" => 6520.5,
            ],
            [
                "time" => 1634664378000,
                "value_change" => 6581.5,
            ],
            [
                "time" => 1634750778000,
                "value_change" => 6590.9,
            ],
            [
                "time" => 1634837178000,
                "value_change" => 6567.22352,
            ],
            [
                "time" => 1634923578000,
                "value_change" => 6550,
            ],
            [
                "time" => 1635009978000,
                "value_change" => 6554.1,
            ],
            [
                "time" => 1635096378000,
                "value_change" => 6528,
            ],
            [
                "time" => 1635182778000,
                "value_change" => 6531.47722621,
            ],
            [
                "time" => 1635269178000,
                "value_change" => 6500.2,
            ],
            [
                "time" => 1635355578000,
                "value_change" => 6490.1,
            ],
            [
                "time" => 1635441978000,
                "value_change" => 6346.5,
            ],
            [
                "time" => 1635528378000,
                "value_change" => 6330.1,
            ],
            [
                "time" => 1635614778000,
                "value_change" => 6368.3871592,
            ],
            [
                "time" => 1635701178000,
                "value_change" => 6399.7,
            ],
            [
                "time" => 1635787578000,
                "value_change" => 6426.9,
            ],
            [
                "time" => 1635873978000,
                "value_change" => 6387.9,
            ],
            [
                "time" => 1635960378000,
                "value_change" => 6490.4,
            ],
            [
                "time" => 1636046778000,
                "value_change" => 6470.10159871,
            ],
            [
                "time" => 1636133178000,
                "value_change" => 6515.2545699,
            ],
            [
                "time" => 1636219578000,
                "value_change" => 6572.9,
            ],
            [
                "time" => 1636305978000,
                "value_change" => 6475.3,
            ],
            [
                "time" => 1636392378000,
                "value_change" => 6417.6,
            ],
            [
                "time" => 1636478778000,
                "value_change" => 6431,
            ],
            [
                "time" => 1636565178000,
                "value_change" => 6447.9,
            ],
            [
                "time" => 1636651578000,
                "value_change" => 6446.9,
            ],
            [
                "time" => 1636737978000,
                "value_change" => 6459.0694273,
            ],
            [
                "time" => 1636824378000,
                "value_change" => 5920.5,
            ],
            [
                "time" => 1636910778000,
                "value_change" => 5748.2,
            ],
            [
                "time" => 1636997178000,
                "value_change" => 5655.7,
            ],
            [
                "time" => 1637083578000,
                "value_change" => 5628.3,
            ],
            [
                "time" => 1637169978000,
                "value_change" => 5659.5,
            ],
            [
                "time" => 1637256378000,
                "value_change" => 4918.9,
            ],
            [
                "time" => 1637342778000,
                "value_change" => 4570.9,
            ],
            [
                "time" => 1637429178000,
                "value_change" => 4662.7,
            ],
            [
                "time" => 1637515578000,
                "value_change" => 4352.9,
            ],
            [
                "time" => 1637601978000,
                "value_change" => 4422.7,
            ],
            [
                "time" => 1637688378000,
                "value_change" => 3928,
            ],
            [
                "time" => 1637774778000,
                "value_change" => 4087.8,
            ],
            [
                "time" => 1637861178000,
                "value_change" => 3859.9,
            ],
            [
                "time" => 1637947578000,
                "value_change" => 3881.9,
            ],
            [
                "time" => 1638033978000,
                "value_change" => 4304.9,
            ],
            [
                "time" => 1638120378000,
                "value_change" => 4319.6,
            ],
            [
                "time" => 1638206778000,
                "value_change" => 4039.4,
            ],
            [
                "time" => 1638293178000,
                "value_change" => 4241.3,
            ],
            [
                "time" => 1638379578000,
                "value_change" => 4162.5,
            ],
            [
                "time" => 1638465978000,
                "value_change" => 3901.2,
            ],
            [
                "time" => 1638552378000,
                "value_change" => 3981.9,
            ],
            [
                "time" => 1638638778000,
                "value_change" => 3763.3,
            ],
            [
                "time" => 1638725178000,
                "value_change" => 3514.9,
            ],
            [
                "time" => 1638811578000,
                "value_change" => 3457.5,
            ],
            [
                "time" => 1638897978000,
                "value_change" => 3503.2,
            ],
            [
                "time" => 1638984378000,
                "value_change" => 3638.4,
            ],
            [
                "time" => 1639070778000,
                "value_change" => 3523,
            ],
            [
                "time" => 1639157178000,
                "value_change" => 3435.2813778,
            ],
            [
                "time" => 1639243578000,
                "value_change" => 3535.1,
            ],
            [
                "time" => 1639329978000,
                "value_change" => 3352.36408211,
            ],
            [
                "time" => 1639416378000,
                "value_change" => 3281.7,
            ],
            [
                "time" => 1639502778000,
                "value_change" => 3283.4,
            ],
            [
                "time" => 1639589178000,
                "value_change" => 3299.9,
            ],
            [
                "time" => 1639675578000,
                "value_change" => 3624.7,
            ],
            [
                "time" => 1639761978000,
                "value_change" => 3778.5,
            ],
            [
                "time" => 1639848378000,
                "value_change" => 3810,
            ],
            [
                "time" => 1639934778000,
                "value_change" => 4214.5,
            ],
            [
                "time" => 1640021178000,
                "value_change" => 3971,
            ],
            [
                "time" => 1640107578000,
                "value_change" => 4128,
            ],
            [
                "time" => 1640193978000,
                "value_change" => 4070.9,
            ],
            [
                "time" => 1640280378000,
                "value_change" => 4140.7,
            ],
            [
                "time" => 1640366778000,
                "value_change" => 3906.8,
            ],
            [
                "time" => 1640453178000,
                "value_change" => 3929.8,
            ],
            [
                "time" => 1640539578000,
                "value_change" => 3712,
            ],
            [
                "time" => 1640625978000,
                "value_change" => 4036.7,
            ],
            [
                "time" => 1640712378000,
                "value_change" => 3861.5,
            ],
            [
                "time" => 1640798778000,
                "value_change" => 3972.8,
            ],
            [
                "time" => 1640885178000,
                "value_change" => 3830.3483292,
            ],
        ];

    }

}
