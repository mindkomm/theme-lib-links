<?php

use Timber\Twig_Function as Timber_Twig_Function;

/**
 * Customize Twig
 *
 * @param Twig_Environment $twig
 * @return $twig
 */
add_filter( 'timber/twig', function( Twig_Environment $twig ) {
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
	$twig->addFunction( new Timber_Twig_Function( 'is_external_url', 'is_external_url' ) );

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
	$twig->addFunction( new Timber_Twig_Function( 'get_link_attributes', 'get_link_attributes' ) );

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
	$twig->addFunction( new Timber_Twig_Function( 'url_to_domain', 'url_to_domain' ) );

	return $twig;
});
