# mybb.com [![Uptime Robot status](https://img.shields.io/uptimerobot/status/m779165693-cac9f6eb9c43ffc13e61097d.svg) ![Uptime Robot ratio (30 days)](https://img.shields.io/uptimerobot/ratio/m779165693-cac9f6eb9c43ffc13e61097d.svg)](https://stats.uptimerobot.com/W7xgYf0vg) [![Mozilla HTTP Observatory Grade](https://img.shields.io/mozilla-observatory/grade-score/mybb.com.svg)](https://observatory.mozilla.org/analyze/mybb.com) ![Chromium HSTS preload](https://img.shields.io/hsts/preload/mybb.com.svg)

The source of the [**MyBB.com**](https://mybb.com) website.

Hosted on [GitHub Pages](https://pages.github.com/) using the [Jekyll](https://jekyllrb.com/) server, [Markdown](https://daringfireball.net/projects/markdown/) formatting, [Liquid](https://shopify.github.io/liquid/) templates, and YAML data format.

Some assets are pulled from the [`mybb-website-theme`](https://github.com/mybb/mybb-website-theme/).

## Development

Download the repository content and use [Docker](https://www.docker.com/get-started) to serve the website from local source. Make sure to allow Docker to access the directory using _File sharing_ and run:
```sh
$ docker run -it --rm -p "4000:4000" -v "${PWD}:/usr/src/app" mybb/jekyll-docker
```

This will create a container from a [customized Jekyll image](https://github.com/mybb/jekyll-docker). The website will be available at `https://127.0.0.1:4000` (your browser will warn you about an unsigned certificate that was just generated).

### Using Local Theme
To additionally preview changes made to [`mybb-website-theme`](https://github.com/mybb/mybb-website-theme/) in a sibling directory `../mybb-website-theme/`), run instead:
```sh
$ docker run -it --rm -p "4000:4000" -v "${PWD}:/usr/src/app" -v "${PWD}/../mybb-website-theme:/usr/src/app/_themes/theme" mybb/jekyll-docker
```

## Copyright and Reuse
The website content available in this repository is Copyright 2014 MyBB Group.

While you are welcome to fork this repository to contribute to the development of MyBB's new website, this is the only permitted use for the content within this repository. You may not duplicate, copy, or reuse any portion of the HTML, CSS, Javascript, or visual design elements of the website content available in this repository without express written permission from MyBB except to contribute to the development of MyBB's website. Any other uses are prohibited.
