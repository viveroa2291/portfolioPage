<svg class="prospect" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100%" viewBox="0 0 718 680" enable-background="new 0 0 718 680" xml:space="preserve"><script>(
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
<path fill="#FFFFFF" opacity="1.000000" stroke="none" d=" M1.000001,680.000000   C1.000000,453.700378 1.000000,227.400757 1.000000,1.050569   C240.263962,1.050569 479.527954,1.050569 718.895996,1.050569   C718.895996,227.563492 718.895996,454.127045 718.895996,681.000000   C480.305389,681.000000 241.610641,681.000000 2.439829,680.718384   C1.642501,680.291199 1.321251,680.145630 1.000001,680.000000  M5.000977,7.938023   C5.000977,229.898743 5.000977,451.859467 5.000977,673.820190   C5.329929,673.820068 5.658882,673.819885 5.987834,673.819763   C5.987834,451.546875 5.987834,229.273972 5.991384,6.392922   C5.890961,5.869614 5.790538,5.346306 5.690115,4.822998   C5.511650,4.831429 5.333184,4.839861 5.154719,4.848293   C5.106325,5.565812 5.057930,6.283331 5.000977,7.938023  M715.997925,672.058838   C715.997925,449.773865 715.997925,227.488892 715.997925,5.203918   C715.665283,5.204051 715.332642,5.204184 715.000000,5.204317   C715.000000,227.802872 715.000000,450.401428 714.424316,673.498901   C713.329163,677.324829 710.155457,675.951965 707.766541,675.952515   C476.496246,676.003418 245.225952,676.000000 13.955650,676.000000   C11.997480,676.000000 10.039310,676.000000 8.081141,676.000000   C8.079593,676.333313 8.078046,676.666687 8.076498,677.000000   C9.974385,677.000000 11.872272,677.000000 13.770159,677.000000   C245.207062,677.000000 476.643982,677.000061 708.080872,677.000000   C709.413879,677.000000 710.760254,676.877869 712.077148,677.023499   C715.185120,677.367126 716.389221,675.992432 715.997925,672.058838  M641.826416,323.133667   C642.570312,320.759674 643.499878,318.426239 644.028748,316.005280   C648.243347,296.713898 648.080750,277.454010 643.634277,258.197662   C638.267517,234.956253 624.905518,218.965225 602.259460,210.529175   C583.114868,203.397461 563.355591,200.634766 543.142578,200.622482   C402.325623,200.536896 261.508606,200.558502 120.691620,200.558121   C119.093697,200.558121 117.495781,200.722717 116.048340,200.802216   C116.048340,221.174026 116.048340,241.050674 116.048340,261.751709   C138.419785,261.751709 160.323227,261.751709 181.936646,261.751709   C181.936646,319.273529 181.936646,375.962433 181.936646,433.202148   C159.188995,433.202148 137.133667,433.202148 115.215591,433.202148   C115.215591,456.036804 115.215591,478.315643 115.215591,500.773438   C208.175751,500.773438 300.896332,500.773438 393.880157,500.773438   C393.880157,478.116974 393.880157,455.729645 393.880157,433.015991   C365.227997,433.015991 336.859131,433.015991 308.620270,433.015991   C308.620270,416.102966 308.620270,399.725311 308.620270,383.118500   C310.311981,383.118500 311.470276,383.123077 312.628510,383.117859   C362.936340,382.891571 413.244171,382.662109 463.552002,382.438263   C489.881348,382.321106 516.215515,382.467957 542.537720,381.975494   C552.955383,381.780609 563.506958,381.010925 573.720276,379.055206   C606.061340,372.862396 628.855469,354.460205 641.826416,323.133667  M274.500000,3.999990   C186.077362,3.999990 97.654732,3.999990 9.232098,3.999990   C9.232707,4.222583 9.233315,4.445177 9.233924,4.667769   C243.410690,4.667769 477.587463,4.667769 711.764221,4.667769   C711.764221,4.445177 711.764221,4.222583 711.764160,3.999990   C566.342773,3.999990 420.921387,3.999990 274.500000,3.999990  z"/>
<path fill="#ADADAD" opacity="1.000000" stroke="none" d=" M1.000001,680.500000   C1.321251,680.145630 1.642501,680.291199 1.981876,680.718384   C1.666667,681.000000 1.333333,681.000000 1.000001,680.500000  z"/>
<path fill="#333C59" opacity="1.000000" stroke="none" d=" M641.669312,323.492645   C628.855469,354.460205 606.061340,372.862396 573.720276,379.055206   C563.506958,381.010925 552.955383,381.780609 542.537720,381.975494   C516.215515,382.467957 489.881348,382.321106 463.552002,382.438263   C413.244171,382.662109 362.936340,382.891571 312.628510,383.117859   C311.470276,383.123077 310.311981,383.118500 308.620270,383.118500   C308.620270,399.725311 308.620270,416.102966 308.620270,433.015991   C336.859131,433.015991 365.227997,433.015991 393.880157,433.015991   C393.880157,455.729645 393.880157,478.116974 393.880157,500.773438   C300.896332,500.773438 208.175751,500.773438 115.215591,500.773438   C115.215591,478.315643 115.215591,456.036804 115.215591,433.202148   C137.133667,433.202148 159.188995,433.202148 181.936646,433.202148   C181.936646,375.962433 181.936646,319.273529 181.936646,261.751709   C160.323227,261.751709 138.419785,261.751709 116.048340,261.751709   C116.048340,241.050674 116.048340,221.174026 116.048340,200.802216   C117.495781,200.722717 119.093697,200.558121 120.691620,200.558121   C261.508606,200.558502 402.325623,200.536896 543.142578,200.622482   C563.355591,200.634766 583.114868,203.397461 602.259460,210.529175   C624.905518,218.965225 638.267517,234.956253 643.634277,258.197662   C648.080750,277.454010 648.243347,296.713898 644.028748,316.005280   C643.499878,318.426239 642.570312,320.759674 641.669312,323.492645  M410.500000,262.040131   C376.757202,262.040131 343.014404,262.040131 309.040588,262.040131   C309.040588,284.437622 309.040588,305.999237 309.040588,327.915375   C311.025635,327.915375 312.662628,327.918793 314.299652,327.914886   C333.958313,327.868042 353.617218,327.869995 373.275543,327.762115   C415.088623,327.532654 456.901917,327.308197 498.713806,326.930359   C507.102081,326.854584 514.906494,324.681793 520.379028,317.608032   C529.501160,305.816925 528.365540,283.465179 518.127930,272.581726   C510.201508,264.155243 499.810883,262.145844 488.969391,262.071289   C463.147430,261.893707 437.323273,262.029602 410.500000,262.040131  z"/>
<path fill="#F3F3F3" opacity="1.000000" stroke="none" d=" M715.990234,672.995117   C716.389221,675.992432 715.185120,677.367126 712.077148,677.023499   C710.760254,676.877869 709.413879,677.000000 708.080872,677.000000   C476.643982,677.000061 245.207062,677.000000 13.770159,677.000000   C11.872272,677.000000 9.974385,677.000000 8.076498,677.000000   C8.078046,676.666687 8.079593,676.333313 8.081141,676.000000   C10.039310,676.000000 11.997480,676.000000 13.955650,676.000000   C245.225952,676.000000 476.496246,676.003418 707.766541,675.952515   C710.155457,675.951965 713.329163,677.324829 714.959717,673.248474   C715.495117,672.998047 715.990234,672.995117 715.990234,672.995117  z"/>
<path fill="#EFEFEF" opacity="1.000000" stroke="none" d=" M275.000000,3.999990   C420.921387,3.999990 566.342773,3.999990 711.764160,3.999990   C711.764221,4.222583 711.764221,4.445177 711.764221,4.667769   C477.587463,4.667769 243.410690,4.667769 9.233924,4.667769   C9.233315,4.445177 9.232707,4.222583 9.232098,3.999990   C97.654732,3.999990 186.077362,3.999990 275.000000,3.999990  z"/>
<path fill="#EEEEEE" opacity="1.000000" stroke="none" d=" M715.994080,672.526978   C715.990234,672.995117 715.495117,672.998047 715.247559,672.999023   C715.000000,450.401428 715.000000,227.802872 715.000000,5.204317   C715.332642,5.204184 715.665283,5.204051 715.997925,5.203918   C715.997925,227.488892 715.997925,449.773865 715.994080,672.526978  z"/>
<path fill="#EEEEEE" opacity="1.000000" stroke="none" d=" M5.987834,7.001061   C5.987834,229.273972 5.987834,451.546875 5.987834,673.819763   C5.658882,673.819885 5.329929,673.820068 5.000977,673.820190   C5.000977,451.859467 5.000977,229.898743 5.249774,7.469269   C5.498570,7.000515 5.987834,7.001061 5.987834,7.001061  z"/>
<path fill="#EFEFEF" opacity="1.000000" stroke="none" d=" M5.989609,6.696991   C5.987834,7.001061 5.498570,7.000515 5.254054,7.000683   C5.057930,6.283331 5.106325,5.565812 5.154719,4.848293   C5.333184,4.839861 5.511650,4.831429 5.690115,4.822998   C5.790538,5.346306 5.890961,5.869614 5.989609,6.696991  z"/>
<path fill="#FDFEFE" opacity="1.000000" stroke="none" d=" M411.000000,262.039490   C437.323273,262.029602 463.147430,261.893707 488.969391,262.071289   C499.810883,262.145844 510.201508,264.155243 518.127930,272.581726   C528.365540,283.465179 529.501160,305.816925 520.379028,317.608032   C514.906494,324.681793 507.102081,326.854584 498.713806,326.930359   C456.901917,327.308197 415.088623,327.532654 373.275543,327.762115   C353.617218,327.869995 333.958313,327.868042 314.299652,327.914886   C312.662628,327.918793 311.025635,327.915375 309.040588,327.915375   C309.040588,305.999237 309.040588,284.437622 309.040588,262.040131   C343.014404,262.040131 376.757202,262.040131 411.000000,262.039490  z"/>
</svg>