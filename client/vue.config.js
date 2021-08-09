module.exports = {
  devServer: {
    proxy: {
      "^/api/": {
        target: "http://api:80/",
        logLevel: "debug",
        pathRewrite: { "^/api/": "" },
      },
    },
  },
};
