# SilverStripe Compose Parser

Allows the use of an html-like syntax for template include, and new composition functionality for templates.
This new functionality should allow the creation of more resuable html both across projects and within projects

## Installation (with composer)

Currently requires https://github.com/silverstripe/silverstripe-framework/pull/2557

	composer require heyday/silverstripe-composeparser

## Examples

### A reusable button

`button.ss`

```html
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

```html
<ul class="nav <% if $classes %> $classes<% end_if %>"><% composed %></ul>
```

`navitem.ss`

```html
<li class="nav-item<% if $FirstLast %> nav-$FirstLast<% end_if %><% if $classes %> $classes<% end_if %>">
	<% if $Composed %>
		<% composed %>
	<% else %>
		<:navlink href=$href />
	<% end_if %>
</li>
```

`navlink.ss`

```html
<a href="$href" class="$LinkingMode"><% if $Composed %><% composed %><% else %>$MenuTitle<% end_if %></a>
```

#### Using the nav

```html
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
