<?php
use Cake\Core\Configure;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$this->isMarkdown = true;

?>


## Markdown Helper

WetKit supports Markdown syntax. You can tell WetKit to intepret a template/view file (.ctp) as markdown by
setting `$this->isMarkdown` to true inside your view file.

```
<?php
echo '<?php
    $this->isMarkdown = true;
?>';
?>

# Heading

This code will be generated as **markdown**. 

- item 1
- item 2
- item 3
```

You can also use the markdown helper to interpret specific strings in markdown such as the content of
database text fields.

```
$markdown = $this->helpers()->load('WetKit.Markdown');
echo $markdown->text($data['md_text']);

// Or by loading the helper in your controller

// controller
public $helpers = ['WetKit.Markdown'];
// view template
$this->Markdown->text($data['md_text']);
```