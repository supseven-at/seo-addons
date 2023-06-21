# SEO Addons

This is a TYPO3 CMS extensions with addons and default configuration used by
supseven. This is not a standalone SEO tool, but only a minor extension to
EXT:seo of TYPO3 itself.

## Installation

Add via composer: `composer require supseven/seo-addons`

## Integration

Include the provided Typoscript file:

```typo3_typoscript
@import 'EXT:seo_addons/Configuration/TypoScript/setup.typoscript'
```

and adjust, like a common EXT:seo configuration.

## License

GPL v3.0
