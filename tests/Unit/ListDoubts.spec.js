import { mount } from "@vue/test-utils";
import Teacher from "../../resources/js/components/Teacher.vue";

describe('HomeStudent.vue Test', () => {
  it('renders message when component is created', () => {
    // render the component
    const wrapper = mount(Teacher);

    // check the name of the component
    expect(wrapper.text()).toContain('Selecciona el Professor');
    expect(wrapper.text()).toContain('Escriu el teu problema');
  });
});
