# Links

Collection of link helper functions for WordPress themes.

## Installation

You can install the package via Composer:

```bash
composer require mindkomm/theme-lib-links
```

## Functions

| Name | Summary | Type | Returns/Description |
| --- | --- | --- | --- |
| [get_link_attributes](#get_link_attributes) | Gets href attribute for a link tag with proper target and rel attributes. | `string` or `bool` | An href attribute with target and rel attributes, when necessary. Returns `false` if input is empty. |
| [is_external_url](#is_external_url) | Checks if a URL is external or internal. | `bool` | Whether the URL is external. |
| [make_anchor_link](#make_anchor_link) | Converts an URL to an anchor link. | `string` | The updated URL. |
| [url_to_domain](#url_to_domain) | Converts an URL to just the domain name together with the TLD. | `string` | The domain part of the URL. |

### make\_anchor\_link

<p class="summary">Converts an URL to an anchor link.</p>

Prefix the last segment of a URL with a # to use it as an anchor link.

`make_anchor_link( string $url )`

**Returns:** `string` The updated URL.

| Name | Type | Description |
| --- | --- | --- |
| $url | `string` | URL to turn into an anchor link. |

**PHP**

```php
// Output: https://www.mind.ch/onepager#subsection
echo make_anchor_link( 'https://www.mind.ch/onepager/subsection' );
```

---

### is\_external\_url

<p class="summary">Checks if a URL is external or internal.</p>

`is_external_url( string $url )`

**Returns:** `bool` Whether the URL is external.

| Name | Type | Description |
| --- | --- | --- |
| $url | `string` | URL to be parsed. |

**PHP**

```php
if ( is_external_url( 'https://example.org' ) ) {
    // Do something
}
```

**Twig**

```twig
{% if is_external_url('https://www.example.org') %}
    {# Do something #}
{% endif %}
```

---

### url\_to\_domain

<p class="summary">Converts an URL to just the domain name together with the TLD.</p>

`url_to_domain( string $url, bool $strip_www = false, int|bool $limit = false )`

**Returns:** `string` The domain part of the URL.

| Name | Type | Description |
| --- | --- | --- |
| $url | `string` | The URL to convert. |
| $strip_www | `bool` | Optional. Whether to strip the "www" part of the domain. Default false. |
| $limit | `int&#124;bool` | Optional. Limit to a certain amount of characters. Default false. |

**PHP**

```php
<?php $domain = 'https://www.mind.ch/post/blablabla?param=wow'; ?>
<a href="<?php echo $url; ?>"><?php echo url_to_domain( $domain ); ?></a>
```

**Twig**

```twig
{# url = 'https://www.mind.ch/post/blablabla?param=wow' #}
<a href="{{ url }}">{{ url_to_domain(url) }}</a>
```

---

### get\_link\_attributes

<p class="summary">Gets href attribute for a link tag with proper target and rel attributes.</p>

Checks if the URL is internal or external. Adds a `target="_blank"` for external urls. Inspired by
<http://stackoverflow.com/a/25090564/1059980>. To catch a security vulnerability, the attribute
`rel="noopener noreferrer"` is added, see <https://mathiasbynens.github.io/rel-noopener/> for more info.

`get_link_attributes( string $url )`

**Returns:** `string|bool` An href attribute with target and rel attributes, when necessary. Returns `false` if input
is empty.

| Name | Type | Description |
| --- | --- | --- |
| $url | `string` | URL to be parsed. |

**PHP**

```php
<a <?php echo get_link_attributes( 'https://www.mind.ch/blog' ); ?>>MIND Blog</a>
```

**Twig**

```twig
<a {{ get_link_attributes(url) }}>MIND Blog</a>
```

---

## Twig functions

You need [Timber](https://github.com/timber/timber) to use these functions.

- [is_external_url](#is_external_url)
- [get_link_attributes](#get_link_attributes)
- [url_to_domain](#url_to_domain)

## Support

This is a library that we use at MIND to develop WordPress themes. You’re free to use it, but currently, we don’t provide any support. 
