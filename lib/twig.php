<?php

declare(strict_types=1);

/**
 * Add Twig functions.
 */

add_filter('timber/twig/functions', static function (array $functions): array {
    /**
     * Checks if a URL is external or internal.
     *
     * Usage:
     * {% if is_external_url(partner.url) %}
     *     {# Do something special #}
     * {% endif %}
     *
     * @since 1.0.0
     *
     * @see is_external_url()
     */
    $functions['is_external_url'] = [
        'callable' => 'is_external_url',
    ];

    /**
     * Get href attribute for an <a> tag with proper target and rel attributes.
     *
     * Usage:
     * <a {{ get_link_attributes( post.link ) }}>Your link text</a>
     *
     * @since 1.0.0
     *
     * @see get_link_attributes()
     */
    $functions['get_link_attributes'] = [
        'callable' => 'get_link_attributes',
    ];

    /**
     * Convert a URL to just the domain name together with the TLD.
     *
     * Usage:
     * <a href={{ url }}>{{ url_to_domain(url) }}</a>
     *
     * @since 1.0.0
     *
     * @see url_to_domain()
     */
    $functions['url_to_domain'] = [
        'callable' => 'url_to_domain',
    ];

    return $functions;
});
