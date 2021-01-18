const webpack = require('webpack');

//...
plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        }),
    ],
    //...
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel();
    });