# WordPress Theme

This project showcases my learning journey with implementing an associative autoloader and the Singleton design pattern using traits. It highlights how these concepts can streamline WordPress theme development by promoting modularity and efficient resource management.

## Features

1. **Autoloader**: Automatically loads classes, traits, and other resources based on their namespace and file structure.
2. **Singleton Trait**: Ensures that only one instance of a class is created and provides a global point of access to it.
3. **Class-Based Structure**: Organizes the theme's functionality into reusable and maintainable classes.

---

## Components

### 1. Autoloader

The autoloader is implemented in [`autoloader.php`](inc/helpers/autoloader.php). It dynamically loads classes and traits based on their namespace and file path.

-    **Namespace Root**: `MANGROVE_COLLECTION\`
-    **File Mapping**:
     -    Classes are located in `inc/classes/` and follow the naming convention `class-{name}.php`.
     -    Traits are located in `inc/traits/` and follow the naming convention `trait-{name}.php`.

The autoloader is registered using `spl_autoload_register`.

### 2. Singleton Trait

The Singleton trait is defined in [`trait-singleton.php`](inc/traits/trait-singleton.php). It ensures that only one instance of a class is created.

-    **Key Methods**:
     -    `get_instance()`: Returns the single instance of the class.
     -    `__construct()`: Protected to prevent direct instantiation.
     -    `__clone()`: Final to prevent cloning.

### 3. Theme Class

The main theme class is implemented in [`class-mangrove-collection-theme.php`](inc/classes/class-mangrove-collection-theme.php). It uses the Singleton trait to ensure a single instance.

-    **Namespace**: `MANGROVE_COLLECTION\Inc`
-    **Key Methods**:
     -    `__construct()`: Initializes the theme setup.
     -    `set_hooks()`: Placeholder for adding WordPress hooks.

### 4. Entry Point

The theme is bootstrapped in [`functions.php`](functions.php). It defines the theme's directory path and initializes the theme instance using the `mangrove_collection_get_theme_instance()` function.

---

## Usage

1. **Autoloader**: Automatically loads classes and traits when they are used.
2. **Singleton**: Use `get_instance()` to access the single instance of a class.
3. **Theme Initialization**: The theme is initialized by calling `mangrove_collection_get_theme_instance()` in `functions.php`.

---

## Example

To add a new class or trait:

1. Place the file in the appropriate directory (`inc/classes/` or `inc/traits/`).
2. Follow the naming conventions (`class-{name}.php` or `trait-{name}.php`).
3. Use the namespace `MANGROVE_COLLECTION\Inc` for classes or `MANGROVE_COLLECTION\Inc\Traits` for traits.

The autoloader will automatically load the file when the class or trait is used.

---

## License

This project is licensed under the MIT License.
