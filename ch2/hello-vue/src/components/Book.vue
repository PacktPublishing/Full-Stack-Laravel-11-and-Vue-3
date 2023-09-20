<script setup>
defineProps({
  book: {
    type: Object,
    required: true
  }
})
</script>

<template>
  {{ book.title  }}
  <br>
  {{ book.author  }}
</template>