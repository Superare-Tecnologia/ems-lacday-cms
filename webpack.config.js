const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: {
    bundle: './assets/js/main.js',
    styles: './assets/scss/main.scss'
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'dist'),
    clean: true, // Limpa a pasta dist antes de cada compilação
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
