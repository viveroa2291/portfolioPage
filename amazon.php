<svg class="amazon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100%" viewBox="0 0 800 800" enable-background="new 0 0 800 800" xml:space="preserve"><script>(
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
<path fill="#000000" opacity="1.000000" stroke="none" d=" M279.920593,348.649658   C291.438416,342.640808 298.456421,344.450165 308.865356,355.845642   C310.735962,355.164398 311.255280,353.195374 312.500458,351.918457   C318.754761,345.504913 326.303558,344.136444 334.542755,346.640747   C342.562592,349.078400 346.702148,354.828888 347.416992,363.202972   C348.510376,376.011597 347.781250,388.828949 347.824951,401.642883   C347.843109,406.959778 347.969421,412.276215 348.030701,417.593048   C348.075745,421.501770 346.214355,423.186829 342.220825,423.338531   C327.529938,423.896423 327.609467,423.982452 327.736450,409.320770   C327.840271,397.327606 327.782257,385.332336 327.699677,373.338654   C327.658905,367.418060 325.648499,364.740753 321.280975,364.319336   C316.406525,363.848999 312.927643,366.478058 311.730042,371.826752   C311.299713,373.748718 311.292328,375.790375 311.285309,377.778076   C311.239227,390.771759 311.147217,403.766693 311.288361,416.758850   C311.339264,421.444427 309.457397,423.583923 304.771088,423.338196   C302.611023,423.224945 300.440796,423.311951 298.275208,423.297455   C291.697784,423.253479 290.950073,422.512085 290.940155,415.703644   C290.922668,403.709503 290.967407,391.715271 290.945099,379.721161   C290.939850,376.891785 290.937561,374.045074 290.638306,371.237823   C290.224060,367.351776 288.201569,364.692108 284.066193,364.278107   C279.615601,363.832581 276.692169,365.866577 275.429169,370.136200   C274.624786,372.855377 274.279053,375.639496 274.294891,378.508606   C274.364868,391.169159 274.357483,403.830444 274.312744,416.491180   C274.291321,422.553436 273.598358,423.248260 267.823914,423.286896   C252.375977,423.390228 254.705185,424.342743 254.639359,410.388794   C254.549789,391.398407 254.604721,372.407166 254.631882,353.416351   C254.640411,347.448029 255.286240,346.844635 261.218109,346.777008   C262.883820,346.758026 264.556427,346.862762 266.214539,346.747559   C270.618896,346.441589 274.074524,347.232544 273.452728,353.116150   C276.611755,352.800690 277.583527,350.040100 279.920593,348.649658  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M192.987823,379.755859   C199.642624,376.671387 206.475174,376.127319 213.214676,375.099091   C215.450287,374.758026 218.763718,375.606903 218.933517,371.811768   C219.096619,368.166656 219.325119,364.373962 215.606247,361.957520   C210.560043,358.678589 202.948074,360.534485 200.788940,366.198822   C199.100296,370.628845 196.636749,371.805786 192.380005,370.586761   C191.283554,370.272797 190.064468,370.384827 188.901382,370.306061   C180.958984,369.768219 179.673828,367.820221 182.838257,360.638885   C187.484848,350.093933 196.625458,346.279510 207.192932,344.911316   C213.562546,344.086639 219.841400,344.862091 225.866043,347.136230   C234.514404,350.400635 239.190659,356.958008 239.316711,366.208191   C239.441574,375.372284 239.417511,384.539917 239.328308,393.704773   C239.278183,398.856903 240.193207,403.671692 243.483704,407.771667   C245.835922,410.702515 245.582016,413.135712 242.578064,415.423279   C240.725937,416.833649 239.041336,418.462250 237.256271,419.962830   C231.727722,424.610260 230.396225,424.477020 225.548508,418.851715   C224.585190,417.733917 223.607178,416.628723 222.243866,415.069244   C213.650742,423.227203 203.749756,426.370331 192.365875,423.041382   C187.904846,421.736877 184.391632,419.005035 182.076752,414.839478   C174.957474,402.028442 179.415466,387.229706 192.987823,379.755859  M218.068375,400.243256   C219.097076,396.850830 219.037689,393.364075 218.930237,389.879852   C218.888168,388.515991 218.662521,387.304718 216.956192,386.878143   C212.027817,385.646088 203.410873,389.660767 201.168213,394.330780   C199.049591,398.742554 199.988602,405.457031 203.305939,407.638702   C206.738220,409.895966 210.253128,409.464722 213.461182,406.970398   C215.467026,405.410858 216.878632,403.367859 218.068375,400.243256  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M381.063843,365.151306   C379.507050,367.571716 379.492279,371.378998 375.964020,370.921082   C371.263245,370.310974 366.183899,371.305756 361.943390,368.385162   C360.721527,367.543579 361.082092,366.052094 361.364319,364.684174   C362.610229,358.645416 365.844452,353.778900 370.942444,350.597870   C382.649689,343.292786 395.097626,342.630402 407.678040,348.104218   C415.710144,351.598999 419.166412,358.407745 419.296906,366.913483   C419.442444,376.400360 419.445038,385.892548 419.304810,395.379364   C419.238159,399.888275 420.093689,403.991028 423.037567,407.470276   C425.766846,410.695892 425.465881,413.377441 421.971558,415.802887   C420.612122,416.746521 419.444244,417.963745 418.173492,419.037933   C411.175751,424.953339 410.637024,424.914886 404.797699,417.987762   C404.057404,417.109528 403.417633,416.146545 402.695679,415.174957   C397.615692,418.174377 393.762665,421.942810 388.423920,423.313263   C375.518158,426.626282 363.619446,421.659271 360.163239,411.224060   C355.581177,397.389465 361.687439,383.671600 374.706421,378.858917   C380.509735,376.713684 386.641296,376.019928 392.742310,375.162964   C395.027313,374.842010 398.615692,375.911255 398.802765,371.704285   C398.991852,367.452087 399.015411,363.261932 394.119843,361.198425   C389.615936,359.299927 385.314056,360.458405 381.063843,365.151306  M394.106964,387.012268   C383.654907,388.419769 379.552185,392.408356 379.967194,400.802582   C380.131195,404.119873 381.001099,407.113464 384.429321,408.500122   C388.073242,409.974030 391.249084,408.972382 394.042816,406.380402   C399.313080,401.490723 399.148132,395.132141 398.681976,388.764618   C398.509613,386.410065 396.615845,386.577576 394.106964,387.012268  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M586.600098,354.044159   C592.205139,345.692902 600.147949,344.309418 608.837402,346.185516   C616.646545,347.871582 621.393188,354.396942 622.390869,363.937256   C624.284119,382.041718 622.811951,400.209625 623.239868,418.343628   C623.317383,421.629944 621.687805,423.283508 618.383789,423.279816   C615.551758,423.276642 612.719421,423.326721 609.887817,423.296875   C603.873596,423.233521 603.099121,422.493958 603.065491,416.265198   C603.000671,404.270569 603.030823,392.275482 603.005066,380.280579   C603.000427,378.115784 602.981934,375.947449 602.857605,373.787201   C602.497009,367.518982 600.479248,364.617706 596.241272,364.143829   C591.606140,363.625458 588.049622,366.528870 586.664795,372.414978   C585.829712,375.964355 585.301453,379.590057 585.325867,383.294067   C585.400330,394.622070 585.227417,405.952728 585.401672,417.278503   C585.466248,421.474854 584.084167,423.376190 579.690186,423.346771   C564.150269,423.242737 565.718201,424.485504 565.697388,409.910004   C565.670532,391.084686 565.662903,372.259277 565.687805,353.433960   C565.695557,347.557373 566.426453,346.888611 572.334839,346.794250   C572.667969,346.788940 573.001221,346.793396 573.334412,346.791321   C583.201477,346.729950 583.201477,346.729889 585.105042,355.936859   C585.623901,355.282104 586.020142,354.782135 586.600098,354.044159  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M493.627808,391.171082   C492.378265,379.864960 493.882660,369.481781 499.381989,359.905243   C510.055145,341.319000 536.625488,340.237610 548.832153,357.841888   C559.344177,373.002075 559.138672,398.317993 548.388306,412.522675   C534.677246,430.639435 508.935211,428.440491 498.466705,408.274933   C495.745361,403.032837 494.200562,397.470184 493.627808,391.171082  M515.625244,370.315521   C513.758301,380.224579 513.816162,390.115936 516.104736,399.944061   C517.167542,404.508453 518.938416,408.633057 524.601868,408.824829   C529.289551,408.983612 532.427002,406.233887 533.729614,400.034851   C535.796936,390.196503 535.610107,380.240753 533.816040,370.382599   C532.604004,363.722687 530.050293,361.258484 525.281128,361.120911   C520.255127,360.975922 518.002991,362.988739 515.625244,370.315521  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M367.952332,501.810669   C386.742950,504.533203 405.128601,505.607849 423.629059,503.434235   C446.216400,500.780487 468.183014,495.732727 489.197235,486.887817   C491.874603,485.760925 494.548370,485.285461 496.279358,488.140289   C498.105652,491.152222 495.555267,492.753357 493.559143,494.174561   C480.269684,503.636658 465.707458,510.466766 449.989227,514.783752   C389.534821,531.387390 334.679779,520.918518 285.998840,480.750366   C285.228119,480.114441 284.426483,479.499542 283.745239,478.775146   C282.599426,477.556732 281.230804,476.191742 282.419342,474.425323   C283.804688,472.366486 285.695557,473.289886 287.291229,474.224091   C303.333435,483.616333 320.479126,490.396393 338.286591,495.508881   C347.867249,498.259460 357.584259,500.545502 367.952332,501.810669  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M458.985382,364.569427   C453.797913,361.870941 448.285309,363.641571 442.931305,363.128876   C440.188385,362.866180 436.632660,363.874451 435.503815,360.545776   C434.168121,356.607117 434.333923,352.309296 435.832306,348.319855   C436.419067,346.757507 438.206482,346.695648 439.744965,346.696320   C453.730042,346.702698 467.715118,346.714630 481.700195,346.714447   C484.773529,346.714417 486.166077,348.214264 486.345337,351.292084   C486.653381,356.582794 485.867767,361.290558 482.467865,365.783081   C476.046295,374.268311 470.143890,383.149017 464.118042,391.928711   C463.040405,393.498840 461.353668,394.818695 461.277252,397.428192   C467.454071,397.669098 473.479187,398.438385 479.274414,400.544373   C486.937744,403.329315 487.437897,403.926636 487.348785,411.986755   C487.335876,413.152100 487.356934,414.317932 487.335449,415.483002   C487.228607,421.274658 486.219055,421.969360 480.795593,419.695007   C466.874268,413.857056 452.997559,413.913818 439.100891,419.774170   C433.814941,422.003235 433.034088,421.223907 432.579468,415.337036   C431.963745,407.364136 433.803741,400.567780 438.832245,394.043823   C446.030273,384.705200 452.291626,374.644592 458.985382,364.569427  z"/>
<path fill="#000000" opacity="1.000000" stroke="none" d=" M507.901855,505.790405   C506.050507,507.743835 504.458649,509.449615 502.795715,511.082977   C501.703979,512.155273 500.448120,513.215759 498.871338,512.038452   C497.505005,511.018219 498.113525,509.615509 498.598267,508.381805   C501.215851,501.719482 503.741180,495.032593 505.113464,487.971100   C506.277435,481.981415 505.019592,480.157013 498.988617,479.137756   C491.986572,477.954407 485.069031,479.547119 478.110382,479.767487   C476.282684,479.825348 474.047852,480.520630 473.352234,478.334076   C472.655090,476.142944 474.912384,475.227478 476.427094,474.342224   C487.362671,467.951080 499.264282,467.755829 511.319458,469.330963   C515.407654,469.865112 517.489197,472.403870 517.472961,476.974243   C517.435303,487.561249 513.626465,496.780945 507.901855,505.790405  z"/>
</svg>