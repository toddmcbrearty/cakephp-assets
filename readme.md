Story
=====
I am currently working with a company using cakephp. As most people would say why not just use Laravel. Well I've created an api using Lumen and using mostly Polymer components for the front end till cakephp can be phased out completely. 

CakePhps utter disregard for proper coding requires you to use multiple steps in order to use vendor packages. Below is my solution to use the great [Stolz/Assets Library](https://github.com/Stolz/Assets) fluently within cakephp.

Let's hope soon enough we'll be running the front with angular/react/pile of dog dung with lumen in the back instead of cakephp 


Requirements
=============
[Stolz/Assets Library](https://github.com/Stolz/Assets)


Usage
=====

load the component in all parent controller classes
`$this->loadComponent('Assets');`

to print out the css add
`<?=$css?>`

to print out the js add
`<?=$js?>`

[Stolz/Assets Library Documentation](https://github.com/Stolz/Assets/blob/master/README.md)
