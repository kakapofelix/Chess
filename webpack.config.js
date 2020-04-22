const path = require ('path')

const postCSSPlugins = [
    require ('postcss-import'),
    require ('postcss-mixins'),
    require ('postcss-simple-vars'),
    require ('postcss-nested'),
    require ('autoprefixer')
]

module.exports = {
    entry: './app/assets/scripts/App.js',
    output: {
        filename: 'bundled.js',
        path: path.resolve(__dirname, 'app')
    },
    devServer: {   
        before: function(app, server) {
            server._watch('./app/**/*html')
        },     
        contentBase: [
            path.join(__dirname, 'app'),            
          ],
          watchContentBase: true,
          compress: true
        },
    mode:'development',
    watch: true,
    module: {
        rules: [
            { test: /\.css$/i,
                use: ['style-loader','css-loader?url=false', {loader: 'postcss-loader', options: {plugins: postCSSPlugins}}]
            }
        ]
    }
}
