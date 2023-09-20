<script setup>
import Book from './components/Book.vue';

const books = [
  {
    title: "If Tomorrow Comes",
    author: "Sidney Sheldon"
  },
  {
    title: "The Outsider",
    author: "Stephen King"
  },
  {
    title: "Hunt for The Red October",
    author: "Tom Clancy"
  },
]
</script>

<template>
  <ul>
    <li v-for="book in books">
      <Book :book="book" />
    </li>
  </ul>
</template>
