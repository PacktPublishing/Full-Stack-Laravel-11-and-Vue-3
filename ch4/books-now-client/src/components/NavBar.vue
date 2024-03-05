<script setup>
import { RouterLink } from 'vue-router';
</script>
<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <RouterLink :to="{ name: 'home' }" class="navbar-item title">BooksNow</RouterLink>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start">
            <RouterLink :to="{ name: 'home' }" class="navbar-item">Home</RouterLink>

            <a class="navbar-item">
                Authors
            </a>

            <a class="navbar-item">
                Genres
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                <RouterLink :to="{ name: 'create-book' }" class="button is-primary">
                    <strong>Add Book</strong>
                </RouterLink> 
                </div>
            </div>
        </div>
    </div>
    </nav>
</template>