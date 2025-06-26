<template>
  <button @click="addToCart" :disabled="loading" class="btn-primary">
    {{ loading ? 'Adding...' : 'Add to Cart' }}
  </button>
</template>

<script setup>
import { ref, defineEmits } from 'vue'

const props = defineProps({
  productId: Number,
  quantity: {
    type: Number,
    default: 1
  }
})

const emit = defineEmits(['cart-updated'])
const loading = ref(false)

const addToCart = async () => {
  loading.value = true
  try {
    await fetch('/?wc-ajax=add_to_cart', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams({
        product_id: props.productId,
        quantity: props.quantity
      })
    })
    emit('cart-updated')
  } finally {
    loading.value = false
  }
}
</script>
