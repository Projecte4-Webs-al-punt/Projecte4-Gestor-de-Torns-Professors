import { mount } from '@vue/test-utils'
import Dashboard from '@/components/Dashboard.vue'


describe('Dashboard.vue Test', () => {
  it('renders message when component is created', () => {
    // render the component
    const wrapper = mount(Dashboard, {
      data() {
        return {
          countStudent: 0, 
          countDoubt: 0,
          countDoubtP: 0, 
          countDoubtR: 0 
        }
      }
    });

    // check the name of the component
    expect(wrapper.vm.$options.name).toMatch('Dashboard');
  });
});
