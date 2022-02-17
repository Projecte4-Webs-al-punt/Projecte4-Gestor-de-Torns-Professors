import { mount } from "@vue/test-utils";
import HomeStudent from "../../resources/js/components/HomeStudent.vue";

describe('HomeStudent.vue Test', () => {
  it('renders message when component is created', () => {
    // render the component
    const wrapper = mount(HomeStudent);

    // check the name of the component
    expect(wrapper.text()).toContain('Preguntar un Dubte');
    expect(wrapper.text()).toContain('Consultar els teus Dubtes');
  });
});
