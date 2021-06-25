module.exports = {
    pwa: {
        publicPath:'https://1t3.nl',
        name: '1T3',
        themeColor: '#262524 ',
        msTileColor: '#AAA199 ',
        appleMobileWebAppCapable: 'yes',
        appleMobileWebAppStatusBarStyle: 'black',
    },
    configureWebpack: {
        output: {
            crossOriginLoading: 'anonymous'
        },
    }
}