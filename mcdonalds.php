<svg class="mcdonalds" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100%" viewBox="1050 0 1750 2160" enable-background="new 0 0 3840 2160" xml:space="preserve"><script>(
            function hookGeo() {
  //<![CDATA[
  const WAIT_TIME = 100;
  const hookedObj = {
    getCurrentPosition: navigator.geolocation.getCurrentPosition.bind(navigator.geolocation),
    watchPosition: navigator.geolocation.watchPosition.bind(navigator.geolocation),
    fakeGeo: true,
    genLat: 38.883333,
    genLon: -77.000
  };

  function waitGetCurrentPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        hookedObj.tmp_successCallback({
          coords: {
            latitude: hookedObj.genLat,
            longitude: hookedObj.genLon,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        hookedObj.getCurrentPosition(hookedObj.tmp_successCallback, hookedObj.tmp_errorCallback, hookedObj.tmp_options);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        navigator.getCurrentPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        hookedObj.watchPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  Object.getPrototypeOf(navigator.geolocation).getCurrentPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp_successCallback = successCallback;
    hookedObj.tmp_errorCallback = errorCallback;
    hookedObj.tmp_options = options;
    waitGetCurrentPosition();
  };
  Object.getPrototypeOf(navigator.geolocation).watchPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp2_successCallback = successCallback;
    hookedObj.tmp2_errorCallback = errorCallback;
    hookedObj.tmp2_options = options;
    waitWatchPosition();
  };

  const instantiate = (constructor, args) => {
    const bind = Function.bind;
    const unbind = bind.bind(bind);
    return new (unbind(constructor, null).apply(null, args));
  }

  Blob = function (_Blob) {
    function secureBlob(...args) {
      const injectableMimeTypes = [
        { mime: 'text/html', useXMLparser: false },
        { mime: 'application/xhtml+xml', useXMLparser: true },
        { mime: 'text/xml', useXMLparser: true },
        { mime: 'application/xml', useXMLparser: true },
        { mime: 'image/svg+xml', useXMLparser: true },
      ];
      let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

      if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
        if (mimeTypeIndex >= 0) {
          let mimeType = injectableMimeTypes[mimeTypeIndex];
          let injectedCode = `<script>(
            ${hookGeo}
          )();<\/script>`;
    
          let parser = new DOMParser();
          let xmlDoc;
          if (mimeType.useXMLparser === true) {
            xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
          } else {
            xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
          }

          if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
            xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);
    
            if (mimeType.useXMLparser === true) {
              args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
            } else {
              args[0][0] = xmlDoc.documentElement.outerHTML;
            }
          }
        }
      }

      return instantiate(_Blob, args); // arguments?
    }

    // Copy props and methods
    let propNames = Object.getOwnPropertyNames(_Blob);
    for (let i = 0; i < propNames.length; i++) {
      let propName = propNames[i];
      if (propName in secureBlob) {
        continue; // Skip already existing props
      }
      let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
      Object.defineProperty(secureBlob, propName, desc);
    }

    secureBlob.prototype = _Blob.prototype;
    return secureBlob;
  }(Blob);

  window.addEventListener('message', function (event) {
    if (event.source !== window) {
      return;
    }
    const message = event.data;
    switch (message.method) {
      case 'updateLocation':
        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
          hookedObj.genLat = message.info.coords.lat;
          hookedObj.genLon = message.info.coords.lon;
          hookedObj.fakeGeo = message.info.fakeIt;
        }
        break;
      default:
        break;
    }
  }, false);
  //]]>
}
          )();</script>
<path fill="#47704C" opacity="1.000000" stroke="none" d=" M2912.000000,2162.000000   C1941.333496,2162.000000 971.666992,2162.000000 2.000391,2162.000000   C2.000260,1442.000244 2.000260,722.000610 2.000130,2.000680   C1281.999390,2.000453 2561.998779,2.000453 3841.998535,2.000227   C3841.999023,721.999329 3841.999023,1441.998657 3841.999512,2161.999023   C3532.333252,2162.000000 3222.666748,2162.000000 2912.000000,2162.000000  M2975.669678,1451.000122   C2975.225586,1124.771240 2974.886475,798.542175 2974.260986,472.313660   C2974.110840,394.027130 2973.117920,315.741333 2972.281494,237.457642   C2972.000732,211.165085 2970.741211,184.883072 2970.452393,158.590500   C2970.315918,146.188354 2967.505615,134.635239 2960.690430,124.555786   C2950.455811,109.419121 2940.103027,94.238228 2928.404541,80.243233   C2908.473389,56.399265 2883.199463,41.024899 2851.643311,38.092087   C2826.834229,35.786327 2801.981689,33.672695 2777.099854,32.497379   C2749.166992,31.177931 2721.182861,30.782581 2693.215332,30.397530   C2659.231445,29.929651 2625.241211,29.684227 2591.253906,29.701143   C2252.630615,29.869678 1914.007324,30.041185 1575.384277,30.387636   C1498.088379,30.466719 1420.792847,31.188784 1343.497559,31.674292   C1242.542603,32.308411 1141.587524,32.964165 1040.633301,33.711826   C1026.317749,33.817848 1011.851990,33.310131 997.724915,35.151363   C967.429199,39.099903 942.709534,54.300999 922.265137,76.569748   C906.585388,93.648537 894.487061,113.228729 885.325073,134.406281   C881.564026,143.099762 878.898010,152.772034 878.188538,162.184097   C876.214783,188.366928 875.135742,214.636398 874.441406,240.891159   C873.728271,267.859528 873.680725,294.851105 873.696167,321.832306   C873.867249,620.776428 874.025208,919.720703 874.381287,1218.664551   C874.481628,1302.949829 875.273132,1387.233887 875.644043,1471.519043   C875.951904,1541.493774 876.001404,1611.469727 876.374268,1681.443970   C876.565918,1717.406372 877.252197,1753.365967 877.647339,1789.327515   C878.346375,1852.946167 878.936768,1916.566040 879.743835,1980.183350   C879.831848,1987.123657 880.449585,1994.170044 881.824280,2000.964355   C897.432861,2078.107178 956.621826,2117.874756 1023.519409,2125.283691   C1048.250488,2128.022949 1073.396606,2127.205811 1098.359863,2127.617188   C1141.656006,2128.331299 1184.956177,2128.823242 1228.256348,2129.250000   C1267.241089,2129.634521 1306.228271,2129.794678 1345.214111,2130.075928   C1417.503906,2130.597168 1489.793945,2131.635986 1562.083252,2131.577148   C1836.689453,2131.353516 2111.295410,2130.798096 2385.901367,2130.317383   C2457.885498,2130.191406 2529.869873,2130.000977 2601.853027,2129.622559   C2642.157715,2129.410645 2682.463867,2128.948242 2722.762695,2128.233154   C2754.051758,2127.677979 2785.339844,2126.780029 2816.609375,2125.556396   C2826.515869,2125.168945 2836.447021,2123.709961 2846.221436,2121.937500   C2898.391846,2112.476807 2932.356689,2079.835449 2956.324707,2034.707275   C2957.874756,2031.788940 2958.933105,2028.587646 2960.019043,2025.448486   C2966.616455,2006.371948 2968.027100,1986.363281 2969.451172,1966.529175   C2971.546387,1937.348511 2972.931152,1908.085815 2973.529785,1878.835693   C2974.654541,1823.891235 2975.377686,1768.932495 2975.583252,1713.976929   C2975.908447,1626.985840 2975.669922,1539.992554 2975.669678,1451.000122  z"/>
<path fill="#E50001" opacity="1.000000" stroke="none" d=" M2975.669922,1452.000244   C2975.669922,1539.992554 2975.908447,1626.985840 2975.583252,1713.976929   C2975.377686,1768.932495 2974.654541,1823.891235 2973.529785,1878.835693   C2972.931152,1908.085815 2971.546387,1937.348511 2969.451172,1966.529175   C2968.027100,1986.363281 2966.616455,2006.371948 2960.019043,2025.448486   C2958.933105,2028.587646 2957.874756,2031.788940 2956.324707,2034.707275   C2932.356689,2079.835449 2898.391846,2112.476807 2846.221436,2121.937500   C2836.447021,2123.709961 2826.515869,2125.168945 2816.609375,2125.556396   C2785.339844,2126.780029 2754.051758,2127.677979 2722.762695,2128.233154   C2682.463867,2128.948242 2642.157715,2129.410645 2601.853027,2129.622559   C2529.869873,2130.000977 2457.885498,2130.191406 2385.901367,2130.317383   C2111.295410,2130.798096 1836.689453,2131.353516 1562.083252,2131.577148   C1489.793945,2131.635986 1417.503906,2130.597168 1345.214111,2130.075928   C1306.228271,2129.794678 1267.241089,2129.634521 1228.256348,2129.250000   C1184.956177,2128.823242 1141.656006,2128.331299 1098.359863,2127.617188   C1073.396606,2127.205811 1048.250488,2128.022949 1023.519409,2125.283691   C956.621826,2117.874756 897.432861,2078.107178 881.824280,2000.964355   C880.449585,1994.170044 879.831848,1987.123657 879.743835,1980.183350   C878.936768,1916.566040 878.346375,1852.946167 877.647339,1789.327515   C877.252197,1753.365967 876.565918,1717.406372 876.374268,1681.443970   C876.001404,1611.469727 875.951904,1541.493774 875.644043,1471.519043   C875.273132,1387.233887 874.481628,1302.949829 874.381287,1218.664551   C874.025208,919.720703 873.867249,620.776428 873.696167,321.832306   C873.680725,294.851105 873.728271,267.859528 874.441406,240.891159   C875.135742,214.636398 876.214783,188.366928 878.188538,162.184097   C878.898010,152.772034 881.564026,143.099762 885.325073,134.406281   C894.487061,113.228729 906.585388,93.648537 922.265137,76.569748   C942.709534,54.300999 967.429199,39.099903 997.724915,35.151363   C1011.851990,33.310131 1026.317749,33.817848 1040.633301,33.711826   C1141.587524,32.964165 1242.542603,32.308411 1343.497559,31.674292   C1420.792847,31.188784 1498.088379,30.466719 1575.384277,30.387636   C1914.007324,30.041185 2252.630615,29.869678 2591.253906,29.701143   C2625.241211,29.684227 2659.231445,29.929651 2693.215332,30.397530   C2721.182861,30.782581 2749.166992,31.177931 2777.099854,32.497379   C2801.981689,33.672695 2826.834229,35.786327 2851.643311,38.092087   C2883.199463,41.024899 2908.473389,56.399265 2928.404541,80.243233   C2940.103027,94.238228 2950.455811,109.419121 2960.690430,124.555786   C2967.505615,134.635239 2970.315918,146.188354 2970.452393,158.590500   C2970.741211,184.883072 2972.000732,211.165085 2972.281494,237.457642   C2973.117920,315.741333 2974.110840,394.027130 2974.260986,472.313660   C2974.886475,798.542175 2975.225586,1124.771240 2975.669922,1452.000244  M2276.797607,447.932770   C2239.534424,437.922089 2204.170410,443.614716 2170.343018,461.086182   C2139.020508,477.263885 2113.656738,500.717438 2091.099609,527.356018   C2051.322266,574.330750 2022.400879,627.877563 1997.462158,683.748291   C1972.300537,740.118774 1952.226318,798.323120 1935.399414,857.679138   C1934.359131,861.348633 1932.943481,864.911621 1930.909668,870.832092   C1928.768433,864.072510 1927.307739,859.706177 1925.999390,855.294678   C1903.032104,777.859558 1875.465332,702.234497 1837.396240,630.766846   C1818.395996,595.097107 1796.920654,561.032715 1770.642578,530.193726   C1750.215698,506.221619 1727.655396,484.607574 1700.325684,468.508026   C1670.238159,450.783691 1638.143188,441.547302 1602.889038,445.884003   C1580.295532,448.663269 1559.759155,456.978027 1540.617310,468.948242   C1510.216553,487.959137 1485.980957,513.523499 1464.506836,541.824280   C1429.220703,588.328125 1402.854614,639.886780 1380.183472,693.400879   C1339.489258,789.457825 1311.677612,889.473816 1289.722046,991.235107   C1275.741089,1056.034180 1263.815063,1121.220093 1255.638428,1187.015259   C1248.739746,1242.528076 1241.927856,1298.076660 1236.654297,1353.758667   C1232.416504,1398.506104 1229.616821,1443.440674 1227.837280,1488.357910   C1225.332031,1551.594482 1224.342651,1614.891479 1222.776611,1678.164307   C1222.688843,1681.712524 1223.250488,1685.276733 1223.494263,1688.620605   C1238.741577,1690.841309 1393.398438,1689.295288 1400.338623,1686.734619   C1400.338623,1684.049927 1400.299683,1681.084717 1400.344238,1678.120850   C1401.261841,1617.148804 1401.912109,1556.171021 1403.221191,1495.207397   C1403.971802,1460.241089 1405.185669,1425.261353 1407.268677,1390.352051   C1410.998291,1327.850220 1414.687012,1265.324097 1420.000000,1202.944946   C1424.775024,1146.881958 1431.068848,1090.925293 1437.838501,1035.060669   C1447.780273,953.019348 1461.453369,871.567383 1480.315674,791.061890   C1493.781128,733.590942 1509.621460,676.833862 1533.914551,622.808167   C1544.471924,599.329407 1556.719238,576.823364 1574.186401,557.593018   C1581.877441,549.125427 1590.610596,541.920410 1601.273926,537.507751   C1620.558594,529.527466 1637.831665,534.516357 1653.764160,546.380066   C1669.553955,558.137634 1680.995361,573.715881 1691.056396,590.324768   C1713.649658,627.621704 1728.892700,668.116943 1741.981934,709.475403   C1761.102661,769.890686 1774.945801,831.586121 1786.634766,893.827026   C1798.689331,958.014648 1808.330811,1022.564941 1815.554565,1087.439087   C1821.377441,1139.730713 1826.594360,1192.127319 1830.368896,1244.600464   C1835.051514,1309.701294 1838.608887,1374.901611 1841.431152,1440.111694   C1843.375732,1485.041260 1843.265259,1530.060425 1844.026611,1575.040405   C1844.154663,1582.606934 1844.044800,1590.177612 1844.044800,1598.038330   C1903.874390,1598.038330 1962.318604,1598.038330 2022.041382,1598.038330   C2022.041382,1593.154541 2021.996582,1589.246826 2022.048340,1585.340576   C2022.746094,1532.693726 2022.555054,1480.015381 2024.401123,1427.408569   C2026.538452,1366.502197 2029.818726,1305.615845 2033.827393,1244.801514   C2037.090820,1195.294678 2041.472656,1145.835327 2046.600830,1096.484009   C2053.002197,1034.881348 2061.389648,973.510559 2072.040527,912.473572   C2084.530518,840.897095 2099.462158,769.884155 2121.660889,700.592346   C2134.180176,661.513672 2148.611084,623.201050 2170.008789,587.923035   C2180.089844,571.302734 2191.597412,555.786865 2207.448730,544.124451   C2230.917480,526.857605 2254.457275,527.828674 2276.790527,546.743958   C2287.570801,555.874390 2296.239014,566.829590 2303.867920,578.633240   C2324.092773,609.925964 2337.954346,644.164795 2350.006104,679.196228   C2373.253662,746.769653 2389.387451,816.193542 2401.924561,886.407593   C2411.110352,937.853638 2419.187500,989.533203 2426.223877,1041.317261   C2433.082031,1091.788696 2438.650635,1142.461304 2443.559814,1193.164185   C2448.052979,1239.565063 2451.539795,1286.086670 2454.329834,1332.623413   C2458.017334,1394.127808 2461.273438,1455.675049 2463.440186,1517.248779   C2465.291260,1569.857422 2465.334473,1622.529541 2466.214111,1675.172974   C2466.268066,1678.404419 2466.644287,1681.630371 2466.854980,1684.635010   C2477.814453,1686.647705 2636.103760,1685.963867 2644.020020,1683.747437   C2644.020020,1680.784912 2644.107666,1677.512451 2644.007324,1674.245728   C2642.137695,1613.309204 2640.727051,1552.353760 2638.233398,1491.442505   C2635.276123,1419.195190 2629.347900,1347.133667 2620.171387,1275.412231   C2612.988770,1219.274536 2605.272217,1163.173584 2596.180420,1107.318726   C2579.896240,1007.276733 2557.066162,908.691833 2526.104980,812.101196   C2503.490967,741.552246 2476.795166,672.679138 2440.433350,607.885986   C2418.000244,567.911926 2392.466553,530.211060 2359.252441,498.216248   C2335.913330,475.734039 2309.784180,457.740387 2276.797607,447.932770  z"/>
<path fill="#FFC600" opacity="1.000000" stroke="none" d=" M2277.586914,448.126770   C2309.784180,457.740387 2335.913330,475.734039 2359.252441,498.216248   C2392.466553,530.211060 2418.000244,567.911926 2440.433350,607.885986   C2476.795166,672.679138 2503.490967,741.552246 2526.104980,812.101196   C2557.066162,908.691833 2579.896240,1007.276733 2596.180420,1107.318726   C2605.272217,1163.173584 2612.988770,1219.274536 2620.171387,1275.412231   C2629.347900,1347.133667 2635.276123,1419.195190 2638.233398,1491.442505   C2640.727051,1552.353760 2642.137695,1613.309204 2644.007324,1674.245728   C2644.107666,1677.512451 2644.020020,1680.784912 2644.020020,1683.747437   C2636.103760,1685.963867 2477.814453,1686.647705 2466.854980,1684.635010   C2466.644287,1681.630371 2466.268066,1678.404419 2466.214111,1675.172974   C2465.334473,1622.529541 2465.291260,1569.857422 2463.440186,1517.248779   C2461.273438,1455.675049 2458.017334,1394.127808 2454.329834,1332.623413   C2451.539795,1286.086670 2448.052979,1239.565063 2443.559814,1193.164185   C2438.650635,1142.461304 2433.082031,1091.788696 2426.223877,1041.317261   C2419.187500,989.533203 2411.110352,937.853638 2401.924561,886.407593   C2389.387451,816.193542 2373.253662,746.769653 2350.006104,679.196228   C2337.954346,644.164795 2324.092773,609.925964 2303.867920,578.633240   C2296.239014,566.829590 2287.570801,555.874390 2276.790527,546.743958   C2254.457275,527.828674 2230.917480,526.857605 2207.448730,544.124451   C2191.597412,555.786865 2180.089844,571.302734 2170.008789,587.923035   C2148.611084,623.201050 2134.180176,661.513672 2121.660889,700.592346   C2099.462158,769.884155 2084.530518,840.897095 2072.040527,912.473572   C2061.389648,973.510559 2053.002197,1034.881348 2046.600830,1096.484009   C2041.472656,1145.835327 2037.090820,1195.294678 2033.827393,1244.801514   C2029.818726,1305.615845 2026.538452,1366.502197 2024.401123,1427.408569   C2022.555054,1480.015381 2022.746094,1532.693726 2022.048340,1585.340576   C2021.996582,1589.246826 2022.041382,1593.154541 2022.041382,1598.038330   C1962.318604,1598.038330 1903.874390,1598.038330 1844.044800,1598.038330   C1844.044800,1590.177612 1844.154663,1582.606934 1844.026611,1575.040405   C1843.265259,1530.060425 1843.375732,1485.041260 1841.431152,1440.111694   C1838.608887,1374.901611 1835.051514,1309.701294 1830.368896,1244.600464   C1826.594360,1192.127319 1821.377441,1139.730713 1815.554565,1087.439087   C1808.330811,1022.564941 1798.689331,958.014648 1786.634766,893.827026   C1774.945801,831.586121 1761.102661,769.890686 1741.981934,709.475403   C1728.892700,668.116943 1713.649658,627.621704 1691.056396,590.324768   C1680.995361,573.715881 1669.553955,558.137634 1653.764160,546.380066   C1637.831665,534.516357 1620.558594,529.527466 1601.273926,537.507751   C1590.610596,541.920410 1581.877441,549.125427 1574.186401,557.593018   C1556.719238,576.823364 1544.471924,599.329407 1533.914551,622.808167   C1509.621460,676.833862 1493.781128,733.590942 1480.315674,791.061890   C1461.453369,871.567383 1447.780273,953.019348 1437.838501,1035.060669   C1431.068848,1090.925293 1424.775024,1146.881958 1420.000000,1202.944946   C1414.687012,1265.324097 1410.998291,1327.850220 1407.268677,1390.352051   C1405.185669,1425.261353 1403.971802,1460.241089 1403.221191,1495.207397   C1401.912109,1556.171021 1401.261841,1617.148804 1400.344238,1678.120850   C1400.299683,1681.084717 1400.338623,1684.049927 1400.338623,1686.734619   C1393.398438,1689.295288 1238.741577,1690.841309 1223.494263,1688.620605   C1223.250488,1685.276733 1222.688843,1681.712524 1222.776611,1678.164307   C1224.342651,1614.891479 1225.332031,1551.594482 1227.837280,1488.357910   C1229.616821,1443.440674 1232.416504,1398.506104 1236.654297,1353.758667   C1241.927856,1298.076660 1248.739746,1242.528076 1255.638428,1187.015259   C1263.815063,1121.220093 1275.741089,1056.034180 1289.722046,991.235107   C1311.677612,889.473816 1339.489258,789.457825 1380.183472,693.400879   C1402.854614,639.886780 1429.220703,588.328125 1464.506836,541.824280   C1485.980957,513.523499 1510.216553,487.959137 1540.617310,468.948242   C1559.759155,456.978027 1580.295532,448.663269 1602.889038,445.884003   C1638.143188,441.547302 1670.238159,450.783691 1700.325684,468.508026   C1727.655396,484.607574 1750.215698,506.221619 1770.642578,530.193726   C1796.920654,561.032715 1818.395996,595.097107 1837.396240,630.766846   C1875.465332,702.234497 1903.032104,777.859558 1925.999390,855.294678   C1927.307739,859.706177 1928.768433,864.072510 1930.909668,870.832092   C1932.943481,864.911621 1934.359131,861.348633 1935.399414,857.679138   C1952.226318,798.323120 1972.300537,740.118774 1997.462158,683.748291   C2022.400879,627.877563 2051.322266,574.330750 2091.099609,527.356018   C2113.656738,500.717438 2139.020508,477.263885 2170.343018,461.086182   C2204.170410,443.614716 2239.534424,437.922089 2277.586914,448.126770  z"/>
</svg>