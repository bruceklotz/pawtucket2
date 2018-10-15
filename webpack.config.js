// webpack v4
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin')

module.exports = {
  entry: { 
    main: './themes/default/js/main.js' ,
    css: './themes/default/css/main.scss'
},
  output: {
    path: path.resolve(__dirname, 'assets'),
    filename: '[name].js'
  },
  module: {
    rules: [
        {
            test: require.resolve('vue/dist/vue.esm.js'),
            use: [
                {
                  loader: 'expose-loader',
                  options: 'Vue'
                }
            ]
        },{
            test: /\.vue$/,
            use: ['vue-loader'],
        },{
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: "babel-loader"
            }
        },{
            test: /\.scss$/,
            use: ExtractTextPlugin.extract(
                {
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                }
            )
        },{
            test: /\.vue$/,
            loader: 'vue-loader'
          }, {
        test: /\.css$/,
        use: [
          'vue-style-loader',
          'css-loader'
        ]
      }
    ]
  },
  plugins: [ 
    new ExtractTextPlugin({filename: 'styles.css'}),
    new VueLoaderPlugin()
  ],
  resolve: {
    modules: ['node_modules']
  }
};