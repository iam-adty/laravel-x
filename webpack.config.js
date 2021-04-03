const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@Components': path.resolve('resources/js/Components'),
            '@Layouts': path.resolve('resources/js/Layouts'),
            '@Pages': path.resolve('resources/js/Pages'),
            '@': path.resolve('resources/js'),
        },
    },
    output: {
        chunkFilename: (pathData) => {
            return 'js/' + pathData.chunk.id.replace('_js_', '/').replace('_vue', '').split('_').join('/') + '.js?id=[chunkhash]';
        },
    },
    optimization: {
        minimize: !process.env.APP_DEBUG,
    }
};
