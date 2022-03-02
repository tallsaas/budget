let mix = require('laravel-mix');

class TallSaas {
  register(val) {
    console.log('mix.tallsaas() was called with ' + val);
  }
  webpackConfig(config) {
    //
  }
}

mix.extend('tallsaas', new Dashboard());