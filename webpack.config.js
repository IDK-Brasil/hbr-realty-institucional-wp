const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin'); // Para minificação de JS


module.exports = {
  devtool: 'source-map',
  entry: {
    main: './assets/js/main.js',
    styles: './assets/scss/main.scss'
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'dist'),
    clean: true,
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader'
        ],
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'styles.css', // Nome do arquivo CSS de saída
    }),
  ],
  optimization: {
    minimize: true,
    minimizer: [
      new TerserPlugin({
        terserOptions: {
          compress: {
            drop_console: false,
          },
        },
      }),
      new CssMinimizerPlugin(), // Minifica o CSS também
    ],
  },
  devServer: {
    static: {
      directory: path.join(__dirname, 'dist'),
    },
    compress: true,
    port: 9000,
    devMiddleware: {
      writeToDisk: true, // Garantir que os arquivos sejam escritos no disco
    },
    watchFiles: ['assets/**/*', '**/*.php'], // Observar arquivos para mudanças
    hot: false, // Desabilitar Hot Module Replacement
    liveReload: true, // Habilitar Live Reload
  }
};
