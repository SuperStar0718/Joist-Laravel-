<script setup>
import ItemInput from "./ItemInput.vue";
</script>
<template>
  <div class="d-flex">
    <VCol cols="6" class="item-box">
      <ItemInput classname="pl-5" type="text" placeholder="description" />
    </VCol>
    <VCol cols="2" class="item-box">
      <ItemInput />
    </VCol>
    <VCol cols="2" class="item-box">
      <ItemInput />
    </VCol>
    <VCol cols="2" class="item-box">
      <div>$4000</div>
    </VCol>
  </div>
</template>
