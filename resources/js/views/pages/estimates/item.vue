<script setup>
import ItemInput from './ItemInput.vue'
import { ref, computed } from 'vue';

const text = ref(''); // data property

const rows = computed(() => (text.value.match(/\n/g) || '').length + 1); // computed property

const rate = ref(0)
const quantity = ref('1')
const total = computed(() => (rate * quantity))
</script>
<template>
  <div class="w-full border-2 border-[#d1d1d1]">
    <div class="flex w-full border-b-2 border-[#d1d1d1]">
      <VCol cols="6" class="p-0 border-r-2 border-[#d1d1d1]">
        <ItemInput type="text" placeholder="Description" />
      </VCol>
      <VCol cols="2" class="p-0 border-r-2 border-[#d1d1d1]">
        <ItemInput v-model="rate" type="text" value="$0.00" inputmode="numeric" />
      </VCol>
      <VCol cols="2" class="p-0 border-r-2 border-[#d1d1d1]">
        <ItemInput v-model="quantity" type="text" value="1" inputmode="numeric" />
      </VCol>
      <VCol cols="2" class="p-0">
        <div class="p-3">
          {{ taotal }}
        </div>
      </VCol>
    </div>
    <div>
      <textarea v-model="text" :rows="rows" name="" id=""
        class="w-full  item-input h-auto p-3 resize-none overflow-hidden" placeholder="Note"></textarea>
    </div>
  </div>
</template>

