# ParseURL for Statamic (v2)

Uses PHP's `parse_url` to return specified pieces of a given URL.

## Installation

1. Move the `statamic-ParseURL` folder to `site/addons/ParseURL` (removing the `statamic-` bit)
2. `cd` into your site's directory.
3. Run `php please addons:refresh`

## Usage

In your template, call the modifier like this:

```
{{ current_url | parseurl:[option] }}
```

… where `[option]` is one of:

- `scheme`
- `user`
- `pass`
- `host`
- `port`
- `path`
- `query`
- `fragment`

### From the [php docs on `parse_url`]()

If given the URL:

```
http://username:password@hostname:9090/path?arg=value#anchor
```

… then …

- `scheme` == "http"
- `user` == "username"
- `pass` == "password"
- `host` == "hostname"
- `port` == 9090
- `path` == "/path"
- `query` == "arg=value"
- `fragment` == "anchor"
