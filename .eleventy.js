const fs = require('fs');
const markdownIt = require('markdown-it');
const markdownItAnchor = require('markdown-it-anchor');
const markdownItFootnote = require('markdown-it-footnote');
const markdownLibrary = markdownIt({ html: true, typographer: true });

module.exports = function(eleventyConfig) {
  eleventyConfig.addWatchTarget('src/assets/scss');
  eleventyConfig.addPassthroughCopy({ 'src/assets/keybase.txt': 'keybase.txt' });
  eleventyConfig.addPassthroughCopy('src/assets/images');
  eleventyConfig.addPassthroughCopy('src/assets/fonts/icons/*.(woff)');
  eleventyConfig.addPassthroughCopy('src/assets/fonts/merriweather-*/*');
  eleventyConfig.addPassthroughCopy('src/**/*.jpg');

  // Markdown
  markdownLibrary.use(markdownItAnchor, {
    permalink: false,
    permalinkClass: 'direct-link',
    permalinkSymbol: '#'
  }).use(markdownItFootnote);

  markdownLibrary.renderer.rules.footnote_caption = (tokens, idx) => {
    let n = Number(tokens[idx].meta.id + 1).toString();
    if (tokens[idx].meta.subId > 0) {
      n += ":" + tokens[idx].meta.subId;
    }
    return n;
  };
  
  // Customize footnotes
  markdownLibrary.renderer.rules.footnote_block_open = () => (
    '<div class="footnotes">\n' +
    '<ol class="footnotes-list">\n'
  );

  markdownLibrary.renderer.rules.footnote_block_close = () => (
    '</ol>\n</div>\n'
  );

  eleventyConfig.setLibrary('md', markdownLibrary);

  // Sort by `index`
  eleventyConfig.addFilter('sortByIndex', function(values) {
    let vals = [...values]
    return vals.sort((a, b) => Math.sign(a.data.index - b.data.index))
  });

  // Filter by `featured`
  eleventyConfig.addFilter('onlyFeatured', function(collection) {
    const filtered = collection.filter(item => item.data.featured === true)
    return filtered;
  });

  // Make 404 page work with `eleventy --serve`
  eleventyConfig.setBrowserSyncConfig({
    callbacks: {
        ready: function(err, browserSync) {
            const content_404 = fs.readFileSync('_site/404.html');
            browserSync.addMiddleware('*', (req, res) => {
                // Provides the 404 content without redirect.
                res.write(content_404);
                res.end();
            });
        }
    }
  });

  return {
    dir: {
        input: 'src',
        output: '_site',
    },
  };
};