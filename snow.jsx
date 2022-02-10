import Particles from "solid-particles";
import snowConfig from "snow.json";

class Snow extends Component {
  snowConfig = snowConfig;

  render() {
    return (
      <Particles
        id="tsparticles"
        options={snowConfig}
      />
    );
  }
}