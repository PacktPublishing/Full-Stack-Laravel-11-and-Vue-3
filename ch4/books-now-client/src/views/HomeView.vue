<script setup>
import { ref } from 'vue'

const books = ref([
  {
    id: 1,
    title: 'Crime and Punishment',
    genre: 'Classic',
    author: 'Fyodor Dostoevsky',
    status: 'To Read',
  },
  {
    id: 2,
    title: 'War and Peace',
    genre: 'Classic',
    author: 'Leo Tolstoy',
    status: 'Read',
  },
  {
    id: 3,
    title: 'The Plague',
    genre: 'Classic',
    author: 'Albert Camus',
    status: 'To Read',
  },
  {
    id: 4,
    title: 'The Legend of Sleepy Hollow',
    genre: 'Horror',
    author: 'Washington Irving',
    status: 'Reading',
  },
  {
    id: 5,
    title: 'Malice',
    genre: 'Detective',
    author: 'Keigo Higashino',
    status: 'Read',
  }
])
</script>

<template>
  <main>
    <section class="section">
      <div class="container">
        <div class="row columns is-multiline">
          <div v-for="book in books" v-bind:key="book.id" class="column is-4">
            <div class="box">
              <strong>Title:</strong> {{ book.title }}
              <br>
              <strong>Author:</strong> {{ book.author }}
              <br>
              <strong>Genre:</strong> {{ book.genre }}
              <br>
              <strong>Status:</strong> {{ book.status }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
