<script setup>
import { ref } from 'vue'

const books = ref([
  {
    id: 1,
    title: 'Crime and Punishment',
    genre: 'Classic',
    author: 'Fyodor Dostoevsky',
    status: 'to-read',
  },
  {
    id: 2,
    title: 'War and Peace',
    genre: 'Classic',
    author: 'Leo Tolstoy',
    status: 'read',
  },
  {
    id: 3,
    title: 'The Plague',
    genre: 'Classic',
    author: 'Albert Camus',
    status: 'to-read',
  },
  {
    id: 4,
    title: 'The Legend of Sleepy Hollow',
    genre: 'Horror',
    author: 'Washington Irving',
    status: 'reading',
  },
  {
    id: 5,
    title: 'Malice',
    genre: 'Detective',
    author: 'Keigo Higashino',
    status: 'read',
  }
])

const status = ref({
  'to-read' : 'To Read',
  'reading' : 'Reading',
  'read' : 'Read',
})
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
              <strong>Status:</strong> {{ status[book.status] }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
