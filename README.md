# Wet Boew CakePHP 3 Plugin

CakePHP 3 Plugin for integration of Wet Boew in PHP applications.

## Installation

Copy the content of this plugin into your CakePHP 3 plugin folder under **/plugins/WetKit**. It is important
to make sure the folder the plugin resides in is named **WetKit**.
 
Load the plugin by adding the following at the end of your application's bootstrap file located 
at **/config/bootstrap.php**

```
Plugin::load('WetKit', ['bootstrap' => true, 'routes' => true, 'autoload' => true]);
```

## WET Configuration

WET is not included with the WetKit plugin. Download the latest version and install it within your project or 
at the location of your choice.

When initializing the plugin within your controller you can specify the path of your WET folder.

Read the Wiki for more information on how to initialize the WetKit Plugin within your appController.


## Using WetKit with Bake

WetKit provides it's own custom bake templates. To use these when baking files make sure to add
`-t WetKit` at the end of your bake commands. 

```
bin\cake bake controller Users -t WetKit
```
