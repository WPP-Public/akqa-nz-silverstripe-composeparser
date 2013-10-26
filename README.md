# SilverStripe Compose Parser

Allows the use of an html-like syntax for template includes, and new composition functionality for more reusable templates.

## Installation (with composer)

	composer require heyday/silverstripe-composeparser

## Examples

### A reusable button

`button.ss`

```php
<% if $href %>
	<a class="btn<% if $type %> btn-$type<% end_if %><% if $size %> btn-$size<% end_if %> $classes" href="$href"><% composed %></a>
<% else %>
	<button class="btn<% if $type %> btn-$type<% end_if %><% if $size %> btn-$size<% end_if %> $classes"><% composed %></button>
<% end_if %>
```

#### Using the button in a template

```html
<:button type="default">A regular button</:button>

<:button type="default" href="http://heyday.co.nz">A link to heyday</:button>
```

#### The resulting html

```html
<button class="btn btn-default">A regular button</button>

<a class="btn btn-default" href="http://heyday.co.nz/">A link to heyday</a>
```

### A reusable Nav

`nav.ss`

```php
<ul class="nav <% if $classes %> $classes<% end_if %>"><% composed %></ul>
```

`navitem.ss`

```php
<li class="nav-item<% if $FirstLast %> nav-$FirstLast<% end_if %><% if $classes %> $classes<% end_if %>">
	<% if $Composed %>
		<% composed %>
	<% else %>
		<:navlink href=$href />
	<% end_if %>
</li>
```

`navlink.ss`

```php
<a href="$href" class="$LinkingMode"><% if $Composed %><% composed %><% else %>$MenuTitle<% end_if %></a>
```

#### Using the nav

```php
Simple usage:
<:nav>
	<% loop $SomeSet %>
		<:navitem href=$Link />
	<% end_loop %>
</:nav>

Customised usage:
<:nav>
	<% loop $SomeSet %>
		<:navitem>
			<% if $SomeCondition %><span class="i-special-icon"></span><% end_if %>
			<navlink href=$Link/>
		</:navitem>
	<% end_loop %>
</:nav>
```
