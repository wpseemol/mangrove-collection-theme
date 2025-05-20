# Mangrove Collection Theme

The **Mangrove Collection Theme** is a custom WordPress theme designed for modern, responsive, and visually appealing websites. It is built with flexibility and performance in mind, making it suitable for a variety of use cases.

## Features

-    **Responsive Design**: Optimized for all devices, including desktops, tablets, and mobile phones.
-    **Customizable**: Easily modify colors, fonts, and layouts through the WordPress Customizer.
-    **SEO Friendly**: Built with best practices to improve search engine visibility.
-    **Lightweight and Fast**: Minimal dependencies for optimal performance.
-    **Widget Ready**: Supports multiple widget areas for enhanced functionality.
-    **Cross-Browser Compatibility**: Works seamlessly across all major browsers.

## Installation

1. Download the theme files.
2. Upload the theme folder to `/wp-content/themes/` in your WordPress installation.
3. Go to the WordPress admin dashboard, navigate to **Appearance > Themes**, and activate the Mangrove Collection Theme.

## Customization

To customize the theme:

1. Navigate to **Appearance > Customize** in the WordPress admin dashboard.
2. Use the available options to modify the theme's appearance and functionality.

## Contributing

Contributions are welcome! If you'd like to report a bug, suggest a feature, or submit a pull request, please visit the [GitHub repository](https://github.com/wpseemol/mangrove-collection-theme.git).

## License

This theme is licensed under the [MIT License](LICENSE).

## Support

For support or inquiries, please contact [wpseemol@gmail.com].

---

## Usage Example

To enable theme features, use `add_theme_support` inside a setup function hooked to `after_setup_theme`. This ensures features are registered at the correct point in the WordPress loading process.

```php
function mangrove_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) );
}
add_action( 'after_setup_theme', 'mangrove_theme_setup' );
```

**Explanation:**

-    `after_setup_theme` is the recommended hook for adding theme support features.
-    Place this code in your theme's `functions.php` file.

## add_theme_support

The `add_theme_support` function in WordPress enables specific theme features. Here are some commonly used options:

### `title-tag`

Enables WordPress to manage the document title, allowing you to avoid hardcoding `<title>` tags in your theme files.

```php
add_theme_support( 'title-tag' );
```

### `custom-logo`

Allows users to upload a custom logo via the Customizer, which can be displayed in your theme.

```php
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
) );
```

### `custom-background`

Lets users set a custom background color or image for their site through the Customizer.

```php
add_theme_support( 'custom-background', array(
    'default-color' => 'ffffff',
    'default-image' => '',
) );
```

Add these functions in your theme's `functions.php` file, typically within a setup function hooked to `after_setup_theme`.
