## ONNXRuntime Downloader Plugin

This is a very simple composer plugin meant to work with the [`ankane/onnxruntime-php`](https://github.com/ankane/onnxruntime-php) package. It downloads the
ONNXRuntime library for the current platform and architecture when the package is installed, and verifies it's
presence when the package is updated. 

[`ankane/onnxruntime-php`](https://github.com/ankane/onnxruntime-php) has a way of downloading the ONNXRuntime library already, but you have to manually trigger
it after installing the package. This plugin automates that process.


## Installation

```bash
composer require codewithkyle/onnxruntime-downloader-plugin
```

## Future Plans

- [ ] Add support for optional configuration options like downloading the GPU version of the library.
