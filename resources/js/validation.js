import { z } from "zod";

window.z = z;
window.validation = {
    user: z
        .string()
        .regex(/^[a-zA-Z]+$/)
        .min(3)
        .max(15),
};
