<script setup>
import AccountSettingsAccount from '@/views/pages/account-settings/AccountSettingsAccount.vue'
import AccountSettingsNotification from '@/views/pages/account-settings/AccountSettingsNotification.vue'
import AccountSettingsSecurity from '@/views/pages/account-settings/AccountSettingsSecurity.vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const activeTab = ref(route.params.tab)

// tabs
const tabs = [
  {
    title: 'Pending',
    icon: 'bx-album',
    tab: 'pending',
  },
  {
    title: 'Approved',
    icon: 'bx-check',
    tab: 'approved',
  },
  {
    title: 'Decliend',
    icon: 'bx-x-circle',
    tab: 'decliend',
  },
]
</script>

<template>
  <div>
    <VRow
      class="mb-1 mx-0"
      align="center"
      justify="space-between"
    >
      <VTabs
        v-model="activeTab"
        show-arrows
      >
        <VTab
          v-for="item in tabs"
          :key="item.icon"
          :value="item.tab"
        >
          <VIcon
            size="20"
            start
            :icon="item.icon"
          />
          {{ item.title }}
        </VTab>
      </VTabs>
     
      <VRow
        align="center"
        justify="end"
        class="gap-2"
      >
        <VBtn
          color="primary"
          text
        >
          <VIcon
            size="20"
            start
            icon="bx-printer"
          />
          Export
        </VBtn>
        <VBtn
          color="primary"
          text
          @click="$router.push({ name: 'new_estimate' })"
        >
          <VIcon
            size="20"
            start
            icon="bx-plus-circle"
          />
          New Estimate
        </VBtn>
      </VRow>
      <VDivider />

      <VWindow
        v-model="activeTab"
        class="mt-5 disable-tab-transition"
      >
        <!-- Account -->
        <VWindowItem value="pending">
          <AccountSettingsAccount />
        </VWindowItem>

        <!-- Security -->
        <VWindowItem value="security">
          <AccountSettingsSecurity />
        </VWindowItem>

        <!-- Notification -->
        <VWindowItem value="notification">
          <AccountSettingsNotification />
        </VWindowItem>
      </VWindow>
    </vrow>
  </div>
</template>
