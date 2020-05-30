const CopyPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: {
    main: './src/app.js',
    // vendor: './src/vendor.js'
  },
  plugins: [
    new CopyPlugin({
      patterns: [{ from: './src/assets/img', to: './images' }],
    }),
  ],
  module: {
    rules: [
      {
        test: /\.html$/i,
        loader: 'html-loader',
      },
      {
        test: /\.(png|jpg|svg|gif)$/i,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[path][name].[ext]',
              outputPath: 'images',
              publicPath: 'wp-content/themes/artcortijo/dist/images',
            },
          },
        ],
      },
      {
        enforce: 'pre',
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'eslint-loader',
        // options: {
        //   // eslint options (if necessary)
        //   envs: ['node', 'es6'],
        //   parserOptions: { ecmaVersion: 8 },
        // },
      },
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
};
