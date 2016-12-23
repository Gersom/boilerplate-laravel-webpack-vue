# boilerplate-vue-bemit

> Boilerplate, Vue v2, Stylus-Bemit

## Development

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# run unit tests
npm run unit

# run e2e tests
npm run e2e

# run all tests
npm test
```

For detailed explanation on how things work, checkout the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).


### Goals

* Architecture: [ITCSS](http://csswizardry.net/talks/2014/11/itcss-dafed.pdf)

ITCSS is a sane, scalable, managed architecture for CSS.

* Naming convention: [BEMIT](http://csswizardry.com/2015/08/bemit-taking-the-bem-naming-convention-a-step-further/)

BEMIT is an approach to front-end development designed with flexibility and ease of modification in mind.

### Directory structure
Language [Spanish](http://creativity.babel.es/creativity/itcss-primer-paso-hacia-bemit/)

1. `Settings`
    * Globally-available settings.
    * Config switches.
    * Brand colours, etc.
2. `Tools`
    * Globally-available tools.
    * Public mixins.
    * Helper functions.
3. `Generic`
    * Ground zero styles.
    * Low-specificity, far-reaching.
    * Resets, Normalize.css, etc.
4. `Base`
    * Unclassed HTML elements.
    * H1–H6, basic links, lists, etc.
    * Last layer we see type selectors (e.g. a {},  blockquote {}).
5. `Objects`
    * OOCSS.
    * Design patterns.
    * No cosmetics.
    * Begin using classes exclusively.
    * Agnostically named (e.g. .o-list {}).
6. `Components`
    * Designed pieces of UI.
    * Still only using classes.
    * More explicitly named (e.g. .c-products-list {}).
7. `Trumps`
    * Overrides, helpers, utilities.
    * Only affect one piece of the DOM at a time.
    * Usually carry !important.
