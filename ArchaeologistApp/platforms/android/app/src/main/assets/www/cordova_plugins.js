cordova.define('cordova/plugin_list', function(require, exports, module) {
  module.exports = [
    {
      "id": "cordova-plugin-restful.RESTful",
      "file": "plugins/cordova-plugin-restful/www/RESTful.js",
      "pluginId": "cordova-plugin-restful",
      "clobbers": [
        "cordova.plugins.RESTful"
      ]
    }
  ];
  module.exports.metadata = {
    "cordova-plugin-whitelist": "1.3.5",
    "cordova-plugin-restful": "0.0.3"
  };
});