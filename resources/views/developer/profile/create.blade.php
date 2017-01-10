@extends('layouts.app')

@section('content')
<main class="row" id="dev-profile">

    <aside class="col-xs-1 col-md-2">
        <nav class="panel panel-default">
            <header class="panel-heading">
                <h2 class="panel-title">Menu</h2>
            </header>
            <ul class="panel-body nav nav-pills nav-stacked">
                <li role="presentation" :class="{active: menu.overview}">
                    <a href="#" @click.prevent="showSection('overview')">Overview</a>
                </li>
                <li role="presentation" :class="{active: menu.resumes}">
                    <a href="#" @click.prevent="showSection('resumes')">Resumes</a>
                </li>
                <li role="presentation" :class="{active: menu.history}">
                    <a href="#" @click.prevent="showSection('history')">Work History</a>
                </li>
                <li role="presentation" :class="{active: menu.portfolio}">
                    <a href="#" @click.prevent="showSection('portfolio')">Portfolio</a>
                </li>
                <li role="presentation" :class="{active: menu.skills}">
                    <a href="#" @click.prevent="showSection('skills')">Skills</a>
                </li>
                <li role="presentation" :class="{active: menu.links}">
                    <a href="#" @click.prevent="showSection('links')">Education and Links</a>
                </li>
            </ul>
        </nav>
    </aside>

    <section class="col-xs-10 col-md-9">

        <section v-if="menu.overview" class="panel panel-default">
            <header class="panel-heading clearfix">
                <h2 class="panel-title pull-left">Information and Overview</h2>
                <div class="pull-right">
                    <button type="button" @click="editOverview" class="btn btn-xs btn-primary">Edit</button>
                </div>
            </header>

            <article v-if="!overviewForm" class="panel-body">
                <p>Tell every one a little bit about you, your hobbies and other interests</p>
            </article>
            <form v-show="overviewForm" action="" method="post" class="panel-body">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="overview" rows="20" class="form-control"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </section>

        <section v-if="menu.resumes" class="panel panel-default">
            <header class="panel-heading clearfix">
                <h2 class="panel-title pull-left">Resumes</h2>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#addResume">Add</button>
                </div>
            </header>

            <div class="panel-body">
                You are logged in!
            </div>
        </section>
    
        <div v-if="menu.links" class="row">

            <div class="col-md-6">
                <section class="panel panel-default">
                    <header class="panel-heading clearfix">
                        <h2 class="panel-title pull-left">Education</h2>
                        <div class="pull-right">
                            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#addResume">Add</button>
                        </div>
                    </header>

                    <article class="panel-body">
                        <p>Share your profesional education.</p>
                    </article>
                </section>
            </div>
            
            <div class="col-md-6">
                <section class="panel panel-default">
                    <header class="panel-heading clearfix">
                        <h2 class="panel-title pull-left">Links</h2>
                        <div class="pull-right">
                            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#addResume">Add</button>
                        </div>
                    </header>

                    <article class="panel-body">
                        <p>Link to your Github, Bitbucket, open source projects etc. </p>
                    </article>
                </section>
            </div>

        </div>

        <section v-if="menu.portfolio" class="panel panel-default">
            <header class="panel-heading clearfix">
                <h2 class="panel-title pull-left">Portfolio of Sites</h2>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#addPortfolio">Add</button>
                </div>
            </header>

            <article class="panel-body">
                <p>Show prospective employers your deployed and active work.</p>
            </article>
        </section>

        <section v-if="menu.history" class="panel panel-default">
            <header class="panel-heading clearfix">
                <h2 class="panel-title pull-left">Work History</h2>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-success">Add</button>
                </div>
            </header>

            <article class="panel-body">
                <p>Show up your work history.</p>
            </article>
        </section>

        <section v-if="menu.skills" class="panel panel-default">
            <header class="panel-heading clearfix">
                <h2 class="panel-title pull-left">Skills</h2>
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#addResume">Add</button>
                </div>
            </header>

            <article class="panel-body">
                <p>Select your skills and experience level.</p>
            </article>
        </section>

    </section>
    @include('developer.profile.modals.add_portfolio')
    @include('developer.profile.modals.add_resume')
</main>
@endsection

@section('script')
<script>
    new Vue({
        el: '#dev-profile',
        data: {
            menu: {
                overview: true,
                resumes: false,
                portfolio: false,
                links: false,
                skills: false,
                history: false,
                education: false
            },
            overviewForm: false
        },
        methods: {
            showSection (section) {
                for(var item in this.menu) {
                    if(item == section) {
                        this.menu[item] = true;
                    } else {
                        this.menu[item] = false;
                    }
                }
            },
            editOverview () {
                this.overviewForm = !this.overviewForm;
            }
        }
    });
</script>
@endsection