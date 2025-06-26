<template>
  <div>
    <button @click="toggle">Cart ({{ items.length }})</button>
    <div v-if="show">
      <div v-for="item in items" :key="item.key">
        <p>{{ item.name }} × {{ item.quantity }}</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const show = ref(false)
const items = ref([])

const toggle = () => {
  show.value = !show.value
}

const fetchCart = async () => {
  const res = await fetch('/?wc-ajax=get_refreshed_fragments')
  const data = await res.json()
  // Since WooCommerce returns HTML fragments, you may need a custom API or parse DOM
  // Placeholder: items.value = extractItems(data);
}

onMounted(() => {
  fetchCart()
  window.addEventListener('cart-updated', fetchCart)
})
</script>
