## Getting started

To get the repo up and running on a clean machine, you need the following:

1. `ruby` 2.1.x
2. `bundler` 1.7.x (`gem install bundler`)
3. `node` 0.10.x
4. The `grunt-cli` global package (`npm install -g grunt-cli`)

Everything else will be installed for you.

At time of writing the least irritating way to get these is to [install Homebrew](http://brew.sh/#install). In the future we may automate this bit.

If you want to be able to use a proxy like [Charles](http://charlesproxy.com) in conjunction with the output of [`grunt dev`](#grunt-dev) you will also need a local webserver. [MAMP](http://www.mamp.info/en/) is more or less turn-key and gets the job done.

After you've cloned the repo, run:

```bash
cd sass
npm install
```

`npm install` will first run `bundle install` to fetch sass and compass, then install the Node dependencies (mostly grunt tasks).

## Grunt tasks

### `grunt dev` {#grunt-dev}

One-off compile from the sass to development-friendly css. Uses sass's [nested output style](http://sass-lang.com/documentation/file.SASS_REFERENCE.html#_13), with comments for tracing CSS back to the source SASS. (TODO: Upgrade to sass 3.4 and use sourcemaps instead.) After compiling, the CSS is [blessed](https://github.com/Ponginae/grunt-bless) to split into two files because [IE hates you](http://stackoverflow.com/questions/9906794/internet-explorers-css-rules-limits).

### `grunt prod`

### `grunt watch`
