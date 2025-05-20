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

Allows users to upload a custom logo via the Customize, which can be displayed in your theme.

```php
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
) );
```

To display the custom logo on the frontend, use the `the_custom_logo()` function in your theme template (typically in `header.php`):

```php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
```

This will output the logo uploaded by the user, or nothing if no logo is set.

### `custom-background`

Lets users set a custom background color or image for their site through the Customize.

```php
add_theme_support( 'custom-background', array(
    'default-color' => 'ffffff',
    'default-image' => '',
) );
```

### Displaying the Custom Background on the Frontend

WordPress automatically applies the custom background settings (color or image) to the `<body>` element of your theme if your theme uses the `body_class()` function. To ensure the background displays correctly, include `<?php body_class(); ?>` in your `<body>` tag in `header.php`:

```php
<body <?php body_class(); ?>>
```

WordPress will handle the output of the background styles based on the user's settings in the Customize. No additional code is required to display the custom background on the frontend.

**Tip:** Make sure your theme's CSS does not override the background styles set by WordPress.

## Additional Theme Supports

### `post-thumbnails`

Enables support for featured images (post thumbnails) in posts and pages.

```php
add_theme_support( 'post-thumbnails' );
```

**Note:**  
After enabling this, you can set featured images in the WordPress editor. You can display the post thumbnail in your templates using:

```php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
```

### `customize-selective-refresh-widgets`

Allows widgets to be updated instantly in the Customizer preview without a full page reload.

```php
add_theme_support( 'customize-selective-refresh-widgets' );
```

**Note:**  
This improves the Customizer experience by making widget changes appear faster and more smoothly.

### `automatic-feed-links`

Enables automatic generation of feed links (RSS) in the `<head>` section of your theme.

```php
add_theme_support( 'automatic-feed-links' );
```

This ensures your site’s posts and comments RSS feeds are discoverable by feed readers.

### `html5`

Enables HTML5 markup support for various theme elements, improving semantic structure and accessibility.

```php
add_theme_support( 'html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption',
    'script',
    'style'
) );
```

This outputs HTML5 markup for the specified elements, replacing older XHTML structures.

### `add_editor_style`

Allows you to add custom styles to the WordPress visual editor, making it match your theme’s frontend styles.

```php
add_editor_style();
```

You can pass a custom stylesheet filename as an argument if you want to use a specific CSS file:

```php
add_editor_style( 'editor-style.css' );
```

**Note:**  
Place your editor styles in the theme root or specify the path.

### `wp-block-styles`

Enables support for default block styles provided by WordPress core, ensuring that your theme displays blocks with consistent styling as intended by the block editor.

```php
add_theme_support( 'wp-block-styles' );
```

**What it does:**  
When enabled, WordPress will enqueue the core block styles (`/wp-includes/css/dist/block-library/style.css`) on the frontend. This ensures that blocks such as paragraphs, images, galleries, and others appear as designed in the editor, maintaining visual consistency between the editor and the live site.

**When to use:**  
Add this if you want your theme to inherit the default block styles, or as a starting point before adding your own custom block styles.

**Tip:**  
You can override or extend these styles in your theme’s stylesheet if you want to customize the appearance of specific blocks.

### `align-wide`

Enables support for wide and full alignment options in the block editor, allowing blocks (such as images and groups) to extend beyond the normal content width.

```php
add_theme_support( 'align-wide' );
```

**Note:**  
After enabling this, blocks in the editor will have "Wide width" and "Full width" alignment options. Make sure your theme's CSS supports these alignments by targeting the `.alignwide` and `.alignfull` classes.

---

Add these functions in your theme's `functions.php` file, typically within a setup function hooked to `after_setup_theme`.

## Registering Navigation Menus

To add custom navigation menus to your theme, use the `register_nav_menus` function inside a method or function hooked to an appropriate action, such as `init`. This allows users to assign menus from the WordPress admin.

**Example:**

```php
add_action( 'init', array( $this, 'register_menus' ) );

public function register_menus() {
    register_nav_menus( array(
        'mangrove-header-menu' => esc_html__( 'Header Menu', 'mangrove-collection' ),
        'mangrove-footer-menu' => esc_html__( 'Footer Menu', 'mangrove-collection' ),
    ) );
}
```

**Explanation:**

-    `register_nav_menus` registers multiple menu locations for your theme.
-    Users can assign custom menus to these locations via **Appearance > Menus** in the WordPress admin.
-    Use `esc_html__()` for translation-ready menu names.

**Displaying Menus in Templates:**

To display a registered menu in your theme (e.g., in `header.php` or `footer.php`):

```php
wp_nav_menu( array(
    'theme_location' => 'mangrove-header-menu',
    'menu_class'     => 'header-menu',
) );
```

Replace `'mangrove-header-menu'` with `'mangrove-footer-menu'` for the footer menu.

**Reference:**  
[Navigation Menus – WordPress Developer Resources](https://developer.wordpress.org/themes/functionality/navigation-menus/)

## Getting a Menu ID by Location

To retrieve the menu ID for a specific menu location in your theme, you can use a helper function like the following:

```php
public function get_menu_id( $location ) {
    $locations = get_nav_menu_locations();
    return isset( $locations[ $location ] ) ? $locations[ $location ] : false;
}
```

**Usage Example:**

```php
$menu_id = $this->get_menu_id( 'mangrove-header-menu' );
if ( $menu_id ) {
    $menu_items = wp_get_nav_menu_items( $menu_id );
    // Loop through $menu_items to build your custom menu.
}
```

This function returns the menu ID assigned to the specified location, or `false` if none is set.

---

## Custom Menu Design with Tailwind CSS

To create a custom menu design using Tailwind CSS, loop through the menu items and output your own HTML structure with Tailwind utility classes. Here’s an example for a navigation menu with dropdown support:

```php
function mangrove_custom_menu( $location ) {
    $locations = get_nav_menu_locations();
    if ( ! isset( $locations[ $location ] ) ) {
        return;
    }
    $menu_id = $locations[ $location ];
    $menu_items = wp_get_nav_menu_items( $menu_id );

    if ( ! $menu_items ) {
        return;
    }

    $menu_tree = array();
    foreach ( $menu_items as $item ) {
        if ( ! $item->menu_item_parent ) {
            $menu_tree[ $item->ID ] = array( 'item' => $item, 'children' => array() );
        }
    }
    foreach ( $menu_items as $item ) {
        if ( $item->menu_item_parent && isset( $menu_tree[ $item->menu_item_parent ] ) ) {
            $menu_tree[ $item->menu_item_parent ]['children'][] = $item;
        }
    }

    echo '<ul class="flex gap-8 list-none m-0 p-0">';
    foreach ( $menu_tree as $node ) {
        $has_children = ! empty( $node['children'] );
        echo '<li class="relative group">';
        echo '<a href="' . esc_url( $node['item']->url ) . '" class="block px-4 py-2 text-gray-800 hover:text-blue-600 transition-colors">' . esc_html( $node['item']->title );
        if ( $has_children ) {
            echo ' <span class="ml-1 text-xs">&#9660;</span>';
        }
        echo '</a>';
        if ( $has_children ) {
            echo '<ul class="absolute left-0 top-full hidden group-hover:block bg-white shadow-lg min-w-[180px] z-10">';
            foreach ( $node['children'] as $child ) {
                echo '<li><a href="' . esc_url( $child->url ) . '" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 whitespace-nowrap transition-colors">' . esc_html( $child->title ) . '</a></li>';
            }
            echo '</ul>';
        }
        echo '</li>';
    }
    echo '</ul>';
}
```

**How to Use:**

```php
mangrove_custom_menu( 'mangrove-header-menu' );
```

---

**Tips:**

-    Adjust Tailwind classes to match your theme’s style.
-    For accessibility and mobile support, consider adding keyboard navigation and responsive features.

---

**Reference:**

-    [wp_get_nav_menu_items – WordPress Developer Resources](https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/)
-    [Navigation Menus – WordPress Developer Resources](https://developer.wordpress.org/themes/functionality/navigation-menus/)
