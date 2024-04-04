# Changelog

All notable changes to `onnxruntime-downloader-plugin` will be documented in this file.

## v1.1.0 - 2024-04-04

### What changed

- Only check for ONNX once, after any install or update command

## v1.0.0 - 2024-04-03

### Initial Release

This is a very simple composer plugin meant to work with the [`ankane/onnxruntime-php`](https://github.com/ankane/onnxruntime-php) package. It has a way of downloading the ONNXRuntime library already, but you have to manually trigger it after installing the package. This plugin automates that process.
