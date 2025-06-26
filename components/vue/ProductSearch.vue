<template>
  <div>
    <input v-model="query" @input="search" placeholder="Search products..." />
    <ul v-if="results.length">
      <li v-for="product in results" :key="product.id">{{ product.name }}</li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const query = ref('')
const results = ref([])

const search = async () => {
  if (query.value.length < 3) return
  const res = await fetch(`/wp-json/wc/v3/products?search=${query.value}&consumer_key=ck_xxx&consumer_secret=cs_xxx`)
  results.value = await res.json()
}
</script>
