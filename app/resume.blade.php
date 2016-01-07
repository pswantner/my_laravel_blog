
@extends('layouts.master')

@section('top-script')
<!-- headerstuff -->


@stop
@section('content')
<!-- body stuff -->
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">William's Portfoilio</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/about.html">About</a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Me<span class="caret"></span></a>
               <ul class="dropdown-menu">
              
               <li><a href="https://www.facebook.com/pat.swantner">Facebook</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="mailto:pswantner@gmail.com">Email:<small> pswantner@gmail.com</small></a></li>
                <li role="separator" class="divider"></li>
               <li><a href="https://twitter.com/wilSwantner">Twitter</a></li>
              <li role="separator" class="divider"></li>
               <li><a href="/contact.html">Old Ways</a></li>
              <li role="separator" class="divider"></li>
              
          </ul>


@stop


@section('bottom-script')

<!-- footer stuff -->


@stop
