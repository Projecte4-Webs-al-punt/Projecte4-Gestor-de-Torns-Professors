import { mount } from "@vue/test-utils";
import Dashboard from "../../resources/js/components/Dashboard.vue";

describe('Dashboard.vue Test', () => {
  it('renders message when component is created', () => {
    // render the component
    const wrapper = mount(Dashboard);

    // check the name of the component
    expect(wrapper.vm.$options.name).toMatch('Dashboard');
  });
});
